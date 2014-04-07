<?php

class AdminController extends Controller {

	public function __construct() {
	
		get_helpers( 'auth' );
	
		parent::__construct( array(
		
			admin_required( 'users' ),
			admin_required( 'groups' )
		
		) );
	
	}
	
	public function main( $request ) {
	
		$admin_page = $this->view( 'admin/admin.tpl' );
		$admin_page->render();
	
	}
	
	public function groups( $request ) {
	
		$admin_page = $this->view( 'admin/admin.tpl' );
		$groups_page = $this->view( 'admin/groups.tpl' );

		$group_form = $this->view( 'admin/group_form.tpl' );
		$group_form->assign( 'group_form_type', 'ADD_GROUP' );
		
		$admin_page->assign( 'group_form', $group_form->get() );
		$admin_page->assign( 'section_content', $groups_page->get() );
		
		switch( $request->GET_INDEX( 0 ) ) {
		
			case 'add':
			
				
			
				break;
				
			case 'edit':
			
				
			
				break;
				
			case 'delete':
			
				
			
				break;
		
		}
		
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