<?php

if( !defined( 'IN_FW' ) ) exit;

define( 'BY_KEY', 0 );
define( 'BY_INDEX', 1 );

class Settings {

	static public function get() {
	
		global $settings;
	
		$args = func_get_args();
		
		$data = array_shift( $args );
		$data = isset( $settings[ $data ] ) ? $settings[ $data ] : '';
		
		foreach( $args as $arg ) {
		
			if( isset( $data[ $arg ] ) )
				$data = $data[ $arg ];
			else
				return null;
		
		}
		
		return $data;
	
	}

}

class Session {

	static public function get() {
	
		$args = func_get_args();
		
		$data = array_shift( $args );
		$data = isset( $_SESSION[ $data ] ) ? $_SESSION[ $data ] : '';
		
		foreach( $args as $arg ) {
		
			if( isset( $data[ $arg ] ) )
				$data = $data[ $arg ];
			else
				return null;
		
		}
		
		return $data;
	
	}
	
	static public function set( array $data ) {
	
		$_SESSION = array_merge( $_SESSION, $data );
	
	}

}

class Request {

	static public function GET( $key, $how = BY_KEY ) {
	
		switch( $how ) {
		
			default:
			case BY_KEY:
	
				if( isset( $_GET[ $key ] ) )
					return htmlentities( $_GET[ $key ], ENT_QUOTES, 'utf-8' );
				else
					return null;
					
				break;
				
			case BY_INDEX:
			
				$count = count( $_GET );
				
				if( $key >= $count || $key < 0 ) return null;
				
				for( $i = 0; $i < $count; $i++ )
					if( $i == $key ) return htmlentites( $_GET[ $i ], ENT_QUOTES, 'utf-8' );
			
				break;
				
		}
		
		return null;
	
	}
	
	static public function POST( $key, $how = BY_KEY ) {
	
		switch( $how ) {
		
			default:
			case BY_KEY:
	
				if( isset( $_POST[ $key ] ) )
					return htmlentities( $_POST[ $key ], ENT_QUOTES, 'utf-8' );
				else
					return null;
					
				break;
				
			case BY_INDEX:
			
				$count = count( $_POST );
				
				if( $key >= $count || $key < 0 ) return null;
				
				for( $i = 0; $i < $count; $i++ )
					if( $i == $key ) return htmlentites( $_POST[ $i ], ENT_QUOTES, 'utf-8' );
			
				break;
				
		}
		
		return null;
	
	}

}

function trans( $str ) {

	global $settings;
			
	$path = FW_LANGS_PATH . "{$settings[ 'language' ]}.php";
				
	$str = strtoupper( $str );
				
	if( file_exists( $path ) ) {
			
		include( FW_LANGS_PATH . "{$settings[ 'language' ]}.php" );
				
		if( isset( $_LANG[ $str ] ) )
			return $_LANG[ $str ];
		else
			return $str;
				
	} else {
				
		return $str;
				
	}

}

?>