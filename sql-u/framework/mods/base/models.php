<?php

if( !defined( 'IN_FW' ) ) exit;

abstract class BaseModel {

	//Private
	
	private $db_table;
	static private $db_connection;

	//Protected
	
	protected function is_connected() {
	
		if( isset( self::$db_connection ) && is_a( self::$db_connection, 'mysqli' ) ) return true;
		
		return false;
	
	}
	
	//Public
	
	public function __construct( $table ) {
	
		$this->db_table = Settings::get( 'mysql', 'prefix' ) . $table;
		
		if( !$this->is_connected() ) {
		
			self::$db_connection = new mysqli(	Settings::get( 'mysql', 'host' ),
												Settings::get( 'mysql', 'user' ),
												Settings::get( 'mysql', 'pass' ),
												Settings::get( 'mysql', 'data' ) );
		
		}
	
	}
	
	public function __destruct() {
	
		if( $this->is_connected() ) {
		
			self::$db_connection->close();
			self::$db_connection = null;
		
		}
	
	}
	
	public function select() {
	
		if( !$this->is_connected() ) return false;
	
		$args = func_get_args();
		
		$stmt = new DatabaseSelectStatement( self::$db_connection, $this->db_table, $args );
		
		return $stmt;
	
	}
	
	public function insert( array $data ) {
	
		if( !$this->is_connected() || empty( $data ) ) return false;
		
		$stmt = new DatabaseInsertStatement( self::$db_connection, $this->db_table, $data );
		
		return $stmt;
	
	}
	
	public function update( array $data ) {
	
		if( !$this->is_connected() || empty( $data ) ) return false;
		
		$stmt = new DatabaseUpdateStatement( self::$db_connection, $this->db_table, $data );
		
		return $stmt;
	
	}
	
	public function delete() {
	
		if( !$this->is_connected() ) return false;
		
		$stmt = new DatabaseDeleteStatement( self::$db_connection, $this->db_table );
		
		return $stmt;
	
	}
	
	public function get_connect_error() {
	
		if( $this->is_connected() && self::$db_connection->connect_errno )
			return self::$db_connection->connect_error;
		else
			return '';
	
	}
	
	public function get_error() {
	
		if( $this->is_connected() && self::$db_connection->errno )
			return self::$db_connection->error;
		else
			return '';
	
	}

}

final class DatabaseSelectStatement {

	private $statement;
	private $db_connection;

	public function __construct( $connection, $table, array $data ) {
	
		$this->db_connection = $connection;
		
		if( empty( $data ) )
			$data = '*';
		else
			$data = implode( ',', $data );
		
		$this->statement = "SELECT {$data} FROM `{$table}` ";
	
	}
	
	public function where( $str ) {
	
		$args = func_get_args();
		array_shift( $args );
		
		foreach( $args as $arg ) {
		
			if( get_magic_quotes_gpc() ) $arg = stripslashes( $arg );
		
			if( is_string( $arg ) )
				$str = substr_replace( $str, "'{$arg}'", strpos( $str, '?' ), 1 );
			else
				$str = substr_replace( $str, $arg, strpos( $str, '?' ), 1 );
		
		}
		
		$this->statement .= "WHERE {$str} ";
		
		return $this;
	
	}
	
	public function like( $str ) {
	
		$str = str_replace( '*', '%', $str );
		
		$this->statement .= "LIKE {$str} ";
		
		return $this;
	
	}
	
	public function in_order_by( $fields, $order ) {
	
		$order = strtoupper( $order );
	
		$this->statement .= "ORDER BY {$fields} ";
	
		switch( $order ) {
		
			default:
			case 0:
			case 'ASC':
			
				$this->statement .= 'ASC ';
			
				break;
				
			case 1:
			case 'DESC':
			
				$this->statement .= 'DESC ';
			
				break;
		
		}
		
		return $this;
	
	}
	
	public function execute() {
	
		$data = array();
	
		if( $result = $this->db_connection->query( $this->statement ) ) {
		
			while( $temp = $result->fetch_assoc() ) $data[] = $temp;
			
			$result->free();
		
		}

		return $data;
	
	}

}

final class DatabaseInsertStatement {

	private $statement;
	private $db_connection;

	public function __construct( $connection, $table, array $data ) {
	
		$this->db_connection = $connection;
		
		$this->statement = "INSERT INTO `{$table}` ";
		
		$keys = '';
		$values = '';
		
		$is_first = true;
		
		foreach( $data as $key => $value ) {
		
			$is_string = is_string( $value );
				
			if( get_magic_quotes_gpc() ) {
			
				$key = stripslashes( $key );
				$value = stripslashes( $value );
			
			}
			
			$key = $this->db_connection->real_escape_string( $key );
			$value = $this->db_connection->real_escape_string( $value );
			
			if( $is_string ) $value = "'{$value}'";
			
			if( !$is_first ) {
			
				$keys .= ',';
				$values .= ',';
			
			}
			
			$keys .= "`{$key}`";
			$values .= $value;
			
			$is_first = false;
		
		}
		
		$this->statement .= "({$keys}) VALUES({$values}) ";
	
	}
	
	public function execute() {
	
		if( $this->db_connection->query( $this->statement ) ) {
		
			return true;
		
		}
		
		return false;
	
	}

}

final class DatabaseUpdateStatement {

	private $statement;
	private $db_connection;

	public function __construct( $connection, $table, array $data ) {
	
		$this->db_connection = $connection;
		
		$this->statement = "UPDATE `{$table}` SET ";
		
		foreach( $data as $key => $value ) {
		
			$is_string = is_string( $value );
		
			if( get_magic_quotes_gpc() ) {
			
				$key = stripslashes( $key );
				$value = stripslashes( $value );
			
			}
			
			$key = $this->db_connection->real_escape_string( $key );
			$value = $this->db_connection->real_escape_string( $value );
			
			if( $is_string ) $value = "'{$value}'";
			if( $is_first ) $this->statement .= ',';
			
			$this->statement .= "{$key}={$value}";
			
			$is_first = false;
		
		}
	
	}
	
	public function where( $str ) {
	
		$args = func_get_args();
		array_shift( $args );
		
		foreach( $args as $arg ) {
		
			if( get_magic_quotes_gpc() ) $arg = stripslashes( $arg );
		
			if( is_string( $arg ) )
				$str = substr_replace( $str, "'{$arg}'", strpos( $str, '?' ), 1 );
			else
				$str = substr_replace( $str, $arg, strpos( $str, '?' ), 1 );
		
		}
		
		$this->statement .= "WHERE {$str} ";
		
		return $this;
	
	}
	
	public function execute() {
	
		if( $this->db_connection->query( $this->statement ) ) {
		
			return true;
		
		}
		
		return false;
	
	}

}

final class DatabaseDeleteStatement {

	private $statement;
	private $db_connection;

	public function __construct( $connection, $table ) {
	
		$this->db_connection = $connection;
		
		$this->statement = "DELETE FROM `{$table}` ";
	
	}
	
	public function where( $str ) {
	
		$args = func_get_args();
		array_shift( $args );
		
		foreach( $args as $arg ) {
		
			if( get_magic_quotes_gpc() ) $arg = stripslashes( $arg );
		
			if( is_string( $arg ) )
				$str = substr_replace( $str, "'{$arg}'", strpos( $str, '?' ), 1 );
			else
				$str = substr_replace( $str, $arg, strpos( $str, '?' ), 1 );
		
		}
		
		$this->statement .= "WHERE {$str} ";
		
		return $this;
	
	}
	
	public function execute() {
	
		if( $this->db_connection->query( $this->statement ) ) {
		
			return true;
		
		}
		
		return false;
	
	}

}

?>