<?php

class AuthModel extends Model {

	public function __construct() {
	
		parent::__construct( 'users' );
	
	}
	
	public function get_user_data( $user ) {
	
		return $this->select()->where( 'username=?', array( $user ) )->execute();
	
	}

}

?>