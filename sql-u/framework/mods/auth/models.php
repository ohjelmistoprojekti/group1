<?php

class AuthModel extends BaseModel {

	public function __construct() {
	
		parent::__construct( 'users' );
	
	}
	
	public function get_user_by_email( $email ) {
	
		return $this->select()->where( 'email=?', $email )->execute();
	
	}

}

?>