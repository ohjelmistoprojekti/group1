<?php

session_start();

define( 'IN_FW', true );

define( 'FW_PATH', 'framework/' );
define( 'FW_THEMES_PATH', FW_PATH . 'themes/' );
define( 'FW_LANGS_PATH', FW_PATH . 'langs/' );
define( 'FW_MODS_PATH', FW_PATH . 'mods/' );
define( 'FW_LIBS_PATH', FW_PATH . 'libs/' );

include( FW_PATH . 'settings.php' );
include( FW_PATH . 'helpers.php' );

include( FW_MODS_PATH . 'base/view.php' );
include( FW_MODS_PATH . 'base/controller.php' );
include( FW_MODS_PATH . 'base/models.php' );

function get_mod( $mod ) {
	
	$path = FW_MODS_PATH . "{$mod}/";
	
	if( file_exists( $path . 'models.php' ) ) include( $path . 'models.php' );
	if( file_exists( $path . 'helpers.php' ) ) include( $path . 'helpers.php' );
	
	if( file_exists( $path . 'controller.php' ) ) {
	
		include( $path . 'controller.php' );

		$class = $mod . 'Controller';
		
		if( class_exists( $class ) ) return new $class;
		
	}

}

?>