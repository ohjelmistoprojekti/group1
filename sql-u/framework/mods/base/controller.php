<?php

if( !defined( 'IN_FW' ) ) exit;

abstract class BaseController {

	//Protected
	
	protected function get_view( $view ) {
		
		return new View( $view );
	
	}
	
	protected function get_model( $model ) {
		
		$class = $model . 'Model';
		
		if( class_exists( $class ) ) return new $class;
		return null;

	}
	
	//Public
	
	public function __construct( array $urls ) {
	
		$method = array_keys( $_GET );
		$method = empty( $method ) ? '' : $method[ 0 ];
		
		if( !in_array( $method, $urls ) ) {
		
			$this->main();
			return;
		
		}
		
		if( method_exists( $this, $method ) ) {
			array_shift( $_GET );
			$this->$method();
		} else {
			$this->error( 404 );
		}
	
	}
	
	public function main() {}
	public function error( $code ) {
	
		switch( $code ) {
		
			default:
			case 404:
			
				echo 'Page not found';
			
				break;
				
			case 403:
			
				echo 'Access denied';
				
				break;
		
		}
	
	}

}

?>