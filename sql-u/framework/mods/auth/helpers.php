<?php

function is_admin() {

	if( Session::get( 'user', 'userlevel' ) == 1 ) return true;
	return false;

}

function is_logged_in() {

	if( Session::get( 'user', 'logged_in' ) ) return true;
	return false;

}

?>