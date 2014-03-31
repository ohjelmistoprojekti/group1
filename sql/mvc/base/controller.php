<?php

abstract class Controller {

	//Protected

	protected function model( $model ) {
	
		$path = MVC_APPS_PATH . $model . '/models.php';
		
		if( file_exists( $path ) ) {
		
			include_once( $path );
			
			$class = ucfirst( strtolower( $model ) ) . 'Model';
			
			if( class_exists( $class ) ) return new $class;
		
		}
		
		return false;
	
	}
	
	protected function view( $view ) {
	
		return new View( $view );
	
	}
	
	//Public
	
	public function __construct( array $allowed = array() ) {
	
		$_CLEAN_GET = array();
		$_CLEAN_POST = array();

		foreach( $_GET as $key => $value ) {

			$_CLEAN_GET[ $key ] = htmlentities( $value, ENT_QUOTES, 'UTF-8' );

		}
		
		foreach( $_POST as $key => $value ) {
		
			$_CLEAN_POST[ $key ] = htmlentities( $value, ENT_QUOTES, 'UTF-8' );
		
		}

		$method = array_keys( $_CLEAN_GET );
		$method = isset( $method[ 0 ] ) ? $method[ 0 ] : '';

		//Make sure that the method has been set, is empty and exists in the class
		if( !empty( $method ) && empty( $_CLEAN_GET[ $method ] ) && method_exists( $this, $method ) ) {
		
			array_shift( $_CLEAN_GET );
			
			$request = new Request( $_CLEAN_GET, $_CLEAN_POST );
			
			if( !in_array( $method, $allowed ) ) $this->main( $request ); return;
			
			$this->$method( $request );

		} else {
		
			$request = new Request( $_CLEAN_GET, $_CLEAN_POST );
		
			$this->main( $request );
		
		}
	
	}
	
	public function main( $request ) {}

}

?>
