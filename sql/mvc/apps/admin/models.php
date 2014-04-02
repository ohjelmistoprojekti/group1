<?php

class AdminModel extends Model {

	public function __construct() {
	
		parent::__construct( 'users' );
	
	}

	public function insert_user( $data ) {
	
		$this->insert( $data )->execute();
	
	}

}

?>