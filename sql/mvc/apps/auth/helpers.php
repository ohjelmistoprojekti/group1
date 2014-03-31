<?php

function login_required( $str ) {

	if( $_SESSION[ 'user' ][ 'logged_in' ] ) return $str;
	return null;

}

function admin_required( $str ) {

	if( $_SESSION[ 'user' ][ 'logged_in' ] && $_SESSION[ 'user' ][ 'group' ] == 1 ) return true;
	return null;

}

?>