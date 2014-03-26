<?php

abstract class Controller {

	//Protected

	protected function model( $model ) {
	
		$path = $model . '/models.php';
		
		if( file_exists( $path ) ) {
		
			include_once( MVC_APPS_PATH . $path );
			
			$class = ucfirst( strtolower( $model ) ) . 'Model';
			
			if( class_exists( $class ) ) return new $class;
		
		}
		
		return false;
	
	}
	
	protected function view( $view ) {
	
		$path = $view . '/views.php';
	
		if( file_exists( $path ) ) {
		
			include_once( MVC_APPS_PATH . $path );
		
			$class = ucfirst( strtolower( $view ) ) . 'View';
			
			if( class_exists( $class ) ) return new $class;
		
		}
		
		return false;
	
	}
	
	//Public
	
	public function __construct() {
	
		$_CLEAN_GET = array();
		$_CLEAN_POST = array();

		foreach( $_GET as $key => $value ) {

			$_CLEAN_GET[ $key ] = htmlentities( $value, ENT_QUOTES, 'UTF-8' );

		}
		
		foreach( $_POST as $key => $value ) {
		
			$_CLEAN_POST[ $key ] = htmlentities( $value, ENT_QUOTES, 'UTF-8' );
		
		}

		$method = array_keys( $_CLEAN_GET );
		$method = $method[ 0 ];

		if( isset( $_CLEAN_GET[ $method ] ) && empty( $_CLEAN_GET[ $method ] ) ) {

			array_shift( $_CLEAN_GET );
			
			$this->$method( array_merge( $_CLEAN_GET, $_CLEAN_POST ) );

		}
	
	}

}

?>
