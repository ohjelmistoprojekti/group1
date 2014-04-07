<?php

class Session {
	
	static public function set( $data ) {

		if( is_array( $data ) )
			$_SESSION = array_merge( $_SESSION, $data );
		else
			return '';
	
	}

	static public function get( $a ) {
	
		$args = func_get_args();
		
		$data = $_SESSION;
		
		foreach( $args as $arg ) {
		
			if( isset( $data[ $arg ] ) )
				$data = $data[ $arg ];
			else
				return '';
		
		}
		
		return $data;
	
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

		if( isset( $this->POST[ $str ] ) ) return $this->POST[ $str ];
		
		return '';
	
	}
	
	public function GET( $str ) {
		
		if( isset( $this->GET[ $str ] ) ) return $this->GET[ $str ];
		
		return '';
	
	}
	
	public function GET_INDEX( $index ) {
	
		$keys = array_keys( $this->GET );
		
		if( isset( $keys[ $index ] ) ) return $keys[ $index ];
		
		return '';
	
	}

}

function L( $msg ) {

	global $config;

	$lang = Session::get( 'user', 'language' );
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

function redirect( $url ) {

	header( 'Location: ' . $url );

}

?>