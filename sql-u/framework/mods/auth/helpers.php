<?php

function admin_required( $url ) {

	if( Session::get( 'user', 'logged_in' ) && Session::get( 'user', 'userlevel' ) == 1 ) return $url;
	return '';

}

function login_required( $url ) {

	if( Session::get( 'user', 'logged_in' ) ) return $url;
	return '';

}

?>