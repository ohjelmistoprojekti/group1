<?php

include( 'mvc/init.php' );

if( !Session::get( 'user', 'logged_in' ) ) {

	get_app( 'auth' );

} else {

	switch( Session::get( 'user', 'group' ) ) {
	
		default:
		case 0:
		
			
		
			break;
			
		case 1:
		
			get_app( 'admin' );
		
			break;
	
	}

}

?>