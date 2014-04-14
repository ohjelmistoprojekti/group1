<?php

abstract class Model {

	//Private
	
	private $dbTable;
	private static $dbConnection;
	private static $isConnected = false;
	
	private function is_connected() {
	
		if( self::$isConnected ) return true;
		
		return false;
	
	}
	
	//Protected
	
	protected function select() {
	
		if( !$this->is_connected() ) return;
		
		$args = func_get_args();
		$args = empty( $args ) ? '*' : $args;
	
		$stmt = new ModelSelectStatement( self::$dbConnection, $this->dbTable, $args );
		return $stmt;
	
	}
	
	protected function insert( array $data ) {
	
		if( !$this->is_connected() ) return;
	
		$stmt = new ModelInsertStatement( self::$dbConnection, $this->dbTable, $data );
		return $stmt;
	
	}
	
	protected function update( $data ) {
	
		if( !$this->is_connected() ) return;
		
		$args = func_get_args();
		
		$stmt = new ModelUpdateStatement( self::$dbConnection, $this->dbTable, $args );
		return $stmt;
	
	}
	
	protected function delete() {
	
		if( !$this->is_connected() ) return;
	
		$stmt = new ModelDeleteStatement( self::$dbConnection, $this->dbTable );
		return $stmt;
	
	}
	
	//Public
	
	public function __construct( $table, $data = '' ) {
	
		global $config;
		
		$this->dbTable = $config[ 'mysql' ][ 'prefix' ] . $table;
		
		
		if( !empty( $data ) ) {
			
			if( $this->is_connected() ) {

				self::$isConnected = false;
				self::$dbConnection->close();
				
			}
		
		} else {
		
			$data = $config[ 'mysql' ][ 'database' ];
		
		}
		
		if( $this->is_connected() ) return;
	
		self::$dbConnection = new mysqli( $config[ 'mysql' ][ 'host' ],
										  $config[ 'mysql' ][ 'user' ],
										  $config[ 'mysql' ][ 'pass' ],
										  $data );
										  
		if( !mysqli_connect_errno() )
			self::$isConnected = true;
		else
			$this->dbError = mysqli_connect_error();
		
	}
	
	public function __destruct() {
	
		if( $this->is_connected() ) {

			self::$isConnected = false;
			self::$dbConnection->close();
			
		}
	
	}
	
	public function get_connect_error() {
	
		return mysqli_connect_error();
	
	}
	
	public function get_error() {
	
		if( !$this->is_connected() ) return;
	
		return '<p>' . self::$dbConnection->error . '</p>';
	
	}
	
}

final class ModelSelectStatement {

	private $link;
	private $statement;

	public function __construct( $link, $table, $select ) {
	
		$this->link = $link;
		$this->statement = 'SELECT ';
		
		if( $select == '*' ) {
		
			$this->statement .= "{$select} ";
		
		} else {
		
			if( !is_array( $select ) || empty( $select ) ) return;
			
			$is_first = true;
		
			foreach( $select as $value ) {
		
				if( !$is_first ) $this->statement .= ',';
				
				$this->statement .= $value;
				
				$is_first = false;
		
			}
			
			$this->statement .= ' ';
		
		}
		
		$this->statement .= "FROM {$table} ";
		
	}
	
	public function where( $str, $param ) {
	
		$params = func_get_args();
		array_shift( $params );
	
		foreach( $params as $value ) {
		
			if( get_magic_quotes_gpc() ) {
			
				$value = stripslashes( $value );
			
			}
		
			$value = $this->link->real_escape_string( $value );
		
			if( is_string( $value ) ) $value = "'{$value}'";
		
			$str = substr_replace( $str, $value, strpos( $str, '?' ), 1 );
		
		}
		
		$this->statement .= "WHERE {$str} ";
	
		return $this;
	
	}
	
	public function inAscOrderBy( $param ) {
	
		$params = func_get_args();
	
		$is_first = true;
	
		$this->statement .= 'ORDER BY ';
	
		foreach( $params as $value ) {
		
			if( !$is_first ) $this->statement .= ',';
			
			$this->statement .= $value;
			
			$is_first = false;
		
		}
		
		$this->statement .= ' ASC ';
		
		return $this;
	
	}
	
	public function inDescOrderBy( $param ) {
	
		$params = func_get_args();
	
		$is_first = true;
	
		$this->statement .= 'ORDER BY ';
	
		foreach( $params as $value ) {
		
			if( !$is_first ) $this->statement .= ',';
			
			$this->statement .= $value;
			
			$is_first = false;
		
		}
		
		$this->statement .= ' DESC ';
		
		return $this;
	
	}
	
	public function execute() {
	
		$data = array();
	
		if( $result = $this->link->query( $this->statement ) ) {
		
			while( $temp = $result->fetch_array() ) {
			
				$data[] = $temp;
			
			}
		
			$result->close();
		
		}
		
		return $data;
	
	}

}

final class ModelInsertStatement {

	private $link;
	private $statement;

	public function __construct( $link, $table, array $data ) {
	
		$this->link = $link;
		$this->statement = "INSERT INTO {$table} ";
		
		$is_first = true;
		
		$keys = '';
		$values = '';
		
		$i = 0;
		foreach( $data as $key => $value ) {

			if( get_magic_quotes_gpc() ) {
			
				$value = stripslashes( $value );
			
			}
			
			$value = $this->link->real_escape_string( $value );
		
			if( is_string( $value ) ) $value = "'{$value}'";
		
			if( !$is_first ) {
			
				$keys .= ',';
				$values .= ',';
			
			}
			
			$keys .= "`$key`";
			$values .= $value;
			
			$is_first = false;
			
			$i++;
		
		}
		
		$count = $i > 1 ? 'VALUES' : 'VALUE';
		
		$this->statement .= "({$keys}) {$count}({$values})";
		
	}
	
	public function execute() {
	
		if( $this->link->query( $this->statement ) ) {
		
			return true;
		
		}
		
		return false;
	
	}

}

final class ModelUpdateStatement {

	private $link;
	private $statement;
	
	public function __construct( $link, $table, array $data ) {
	
		$this->link = $link;
		$this->statement = "UPDATE {$table} SET ";
		
		$values = '';
		
		$is_first = true;
		
		foreach( $data as $key => $value ) {

			if( get_magic_quotes_gpc() ) {
			
				$value = stripslashes( $value );
			
			}
			
			$value = $this->link->real_escape_string( $value );
		
			if( is_string( $value ) ) $value = "'{$value}'";
		
			if( !$is_first ) $values .= ',';
			
			$values .= "{$key}={$value}";
			
			$is_first = false;
		
		}
		
		$this->statement .= "{$values} ";
		
	}
	
	public function where( $str, $param ) {
	
		$params = func_get_args();
	
		foreach( $params as $value ) {
		
			if( get_magic_quotes_gpc() ) {
			
				$value = stripslashes( $value );
			
			}
		
			$value = $this->link->real_escape_string( $value );
		
			if( is_string( $value ) ) $value = "'{$value}'";
		
			$str = substr_replace( $str, $value, strpos( $str, '?' ), 1 );
		
		}
		
		$this->statement .= "WHERE {$str} ";
	
		return $this;
	
	}
	
	public function execute() {
	
		if( $this->link->query( $this->statement ) ) {
		
			return true;
		
		}
		
		return false;
	
	}

}

final class ModelDeleteStatement {

	private $link;
	private $statement;
	
	public function __construct( $link, $table ) {
	
		$this->link = $link;
		$this->statement = "DELETE FROM {$table} ";
		
	}
	
	public function where( $str, $params ) {
	
		$params = func_get_args();
	
		foreach( $params as $value ) {
		
			if( get_magic_quotes_gpc() ) {
			
				$value = stripslashes( $value );
			
			}
		
			$value = $this->link->real_escape_string( $value );
		
			if( is_string( $value ) ) $value = "'{$value}'";
		
			$str = substr_replace( $str, $value, strpos( $str, '?' ), 1 );
		
		}
		
		$this->statement .= "WHERE {$str} ";
	
		return $this;
	
	}
	
	public function execute() {
	
		echo $this->statement;
	
		if( $this->link->query( $this->statement ) ) {
		
			return true;
		
		}
		
		return false;
	
	}

}

?>
