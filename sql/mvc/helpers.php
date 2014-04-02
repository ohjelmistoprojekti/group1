<?php

class Session {
	
	static public function set( $data, $value = '' ) {
	
		if( is_array( $data ) ) {
		
			$_SESSION = array_merge( $_SESSION, $data );
		
		} else {
		
			$_SESSION[ $data ] = $value;
		
		}
	
	}

	static public function get( $data ) {
	
		if( is_array( $data ) ) {
		
			if( !isset( $data[ 1 ] ) ) {
			
				if( isset( $_SESSION[ $data[ 0 ] ] ) ) return $_SESSION[ $data[ 0 ] ];
				return '';
			
			} else {
			
				if( isset( $_SESSION[ $data[ 0 ] ] ) ) {
				
					array_shift( $data );
					return $this->get( $data );
				
				}
				
				return '';
			
			}
		
		} else {
	
			if( isset( $_SESSION[ $data ] ) ) return $_SESSION[ $data ];
		
			return '';
			
		}
	
	}

}

class Request {

	private $GET = array();
	private $POST = array();

	public function __construct( array $G, array $P ) {

		$this->GET = $G;
		$this->POST = $P;
	
	}
	
	public function POST( $str ) {

		if( isset( $this->POST[ $str ] ) ) {
		
			return $this->POST[ $str ];
		
		} else {
		
			return '';
		
		}
	
	}
	
	public function GET( $str ) {
		
		if( isset( $this->GET[ $str ] ) ) {
		
			return $this->GET[ $str ];
		
		} else {
		
			return '';
		
		}
	
	}

}

function L( $msg ) {

	global $config;

	$lang = Session::get( array( 'user', 'language' ) );
	$lang = empty( $lang ) ? $config[ 'language' ] : $lang;
	
	$path = MVC_LANGUAGES_PATH . "{$lang}.php";
	
	if( file_exists( $path ) ) {
	
		include( $path );

	} else {
	
		return;
	
	}

	if( isset( $_LANG[ $msg ] ) && !empty( $_LANG[ $msg ] ) ) return $_LANG[ $msg ];
	
	return $msg;

}

function R( &$var ) {

	if( isset( $var ) ) echo $var;

}

function G( &$var ) {

	if( isset( $var ) ) return $var;
	return '';

}

function get_helpers( $app ) {

	$path = MVC_APPS_PATH . "{$app}/helpers.php";
	
	if( file_exists( $path ) ) {
	
		include_once( $path );
	
	}

}

?>