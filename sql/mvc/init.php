<?php

session_start();

define( 'MVC_PATH', 'mvc/' );
define( 'MVC_APPS_PATH', MVC_PATH . 'apps/' );
define( 'MVC_THEMES_PATH', MVC_PATH . 'themes/' );

include( MVC_PATH . 'config.php' );

include( MVC_PATH . 'base/view.php' );
include( MVC_PATH . 'base/model.php' );
include( MVC_PATH . 'base/controller.php' );

function get_app( $app ) {

	$path = MVC_APPS_PATH . "{$app}/controller.php";
	
	if( file_exists( $path ) ) {
		
		include_once( $path );
		
		$class = ucfirst( strtolower( $app ) ) . 'Controller';
			
		if( class_exists( $class ) ) new $class;
		
	}

}

?>
