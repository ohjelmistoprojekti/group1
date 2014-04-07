<?php

function login_required( $str ) {

	if( Session::get( 'user', 'logged_in' ) ) return $str;
	return null;

}

function admin_required( $str ) {

	if( Session::get( 'user', 'logged_in' ) && Session::get( 'user', 'group' ) == 1 ) return true;
	return null;

}

?>