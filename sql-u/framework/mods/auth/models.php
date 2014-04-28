<?php

class AuthModel extends BaseModel {

	public function __construct() {
	
		parent::__construct( 'users' );
	
	}
	
	public function get_user_by( $field, $value ) {
	
		if( is_string( $value ) ) {
			return $this->select()->where( "?='?'", $field, $value )->execute();
		} else {
			return $this->select()->where( "?=?", $field, $value )->execute();
		}
	
	}

}

?>