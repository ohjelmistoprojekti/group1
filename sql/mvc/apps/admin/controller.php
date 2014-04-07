<?php

class AdminController extends Controller {

	public function __construct() {
	
		get_helpers( 'auth' );
	
		parent::__construct( array(
		
			admin_required( 'users' )
		
		) );
	
	}
	
	public function main( $request ) {
	
		$admin_page = $this->view( 'admin/admin.tpl' );
		$admin_page->render();
	
	}
	
	public function users( $request ) {
	
		$admin_page = $this->view( 'admin/admin.tpl' );
		$users_page = $this->view( 'admin/users.tpl' );
		
		$user_form = $this->view( 'admin/user_form.tpl' );
		$user_form->assign( 'in_add_user', 1 );
		$user_form->assign( 'user_form_type', 'ADD_USER' );
		
		$admin_page->assign( 'user_form', $user_form->get() );
		$admin_page->assign( 'section_content', $users_page->get() );
		
		switch( $request->GET_INDEX( 0 ) ) {
		
			case 'add':
			
				$email = $request->POST( 'email' );
				$password = $request->POST( 'password' );
				$password_again = $request->POST( 'retype_password' );
				
				if( empty( $email ) || empty( $password ) || empty( $password_again ) ) {
				
					//Some error
				
					break;
				
				}
				
				if( $password != $password_again ) {
				
					//Some error;
				
					break;
				
				}
			
				$data = array(
				
					'email'		=> $email,
					'password'	=> $password
				
				);
				
				$this->model( 'admin' )->insert_user( $data );
			
				break;
			
			case 'edit':
			
				
			
				break;
			
			case 'delete':
			
				
			
				break;
		
		}
		
		$admin_page->render();
	
	}

}

?>