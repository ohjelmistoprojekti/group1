<?php

class AuthModel extends Model {

	public function __construct() {
	
		parent::__construct( 'users' );
	
	}
	
	public function get_data_by_id( $id ) {
	
		return $this->select()->where( 'id=?', $id )->execute();
	
	}
	
	public function get_data_by_email( $email ) {
	
		return $this->select()->where( 'email=?', $email )->execute();
	
	}

}

?>