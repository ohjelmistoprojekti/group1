<?php

class UserModel extends Model {

	public function __construct() {
	
		parent::__construct( 'users' );
	
	}
	
	public function delete_user( $id ) {
	
		return $this->delete()->where( 'id=?', array( $id ) )->execute();
	
	}

}

?>