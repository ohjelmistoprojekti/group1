<?php



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

	$path = MVC_LANGUAGES_PATH . $_SESSION[ 'user' ][ 'language' ] . '.php';
	
	if( file_exists( $path ) ) {
	
		include( MVC_LANGUAGES_PATH . $_SESSION[ 'user' ][ 'language' ] . '.php' );

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