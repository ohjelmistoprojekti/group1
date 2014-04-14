<?php

class UsersModel extends Model {

	public function __construct() {
	
		parent::__construct( 'users' );
	
	}
	
	public function insert_user( $data ) {
	
		$this->insert( $data )->execute();
	
	}

}

class GroupsModel extends Model {

	public function __construct() {
	
		parent::__construct( 'groups' );
	
	}

	public function insert_group( $data ) {
	
		$this->insert( $data )->execute();
	
	}
	
	public function get_all_groups() {
	
		return $this->select()->execute();
	
	}

}

?>