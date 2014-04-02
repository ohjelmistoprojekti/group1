<?php

class UserController extends Controller {

	public function __construct() {
	
		parent::__construct( array(
		
			
		
		) );
	
	}
	
	public function add( $request ) {
	
		
	
	}
	
	public function edit( $request ) {
	
		
	
	}
	
	public function delete( $request ) {
	
		if( empty( $request->POST( 'id' ) ) ) {
		
			
		
			return;
		
		}
	
		$user_model = $this->model( 'user' );
		
		if( $user_model->delete_user( $request->POST( 'id' ) ) ) {
		
			success( 'admin.tpl', L( 'USER_DELETE_SUCCESSFUL' ) );
		
		} else {
		
			
		
		}
	
	}

}

?>