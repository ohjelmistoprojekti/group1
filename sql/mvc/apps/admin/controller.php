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

		$group_add_form = $this->view( 'admin/group_add_form.tpl' );
		
		$group_edit_list = $this->view( 'admin/group_edit_list.tpl' );
		$group_edit_list->assign( 'groups', $this->model( 'groups' )->get_all_groups() );
		
		$group_delete_list = $this->view( 'admin/group_delete_list.tpl' );
		
		$admin_page->assign( 'group_add_form', $group_add_form->get() );
		$admin_page->assign( 'group_edit_list', $group_edit_list->get() );
		$admin_page->assign( 'group_delete_list', $group_delete_list->get() );
		$admin_page->assign( 'section_content', $groups_page->get() );
		
		switch( $request->GET_INDEX( 0 ) ) {
		
			case 'add':
			
				$name = $request->POST( 'name' );
				
				if( empty( $name ) ) {
				
					//Error
					
					break;
				
				}
				
				$data = array( 'group' => $name );
				
				$groups_model = $this->model( 'groups' );
				$groups_model->insert_group( $data );
				
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
		
		$user_add_form = $this->view( 'admin/user_add_form.tpl' );
		
		$admin_page->assign( 'user_add_form', $user_add_form->get() );
		$admin_page->assign( 'section_content', $users_page->get() );
		
		switch( $request->GET_INDEX( 0 ) ) {
		
			case 'add':
			
				$email = $request->POST( 'email' );
				$fname = $request->POST( 'firstname' );
				$lname = $request->POST( 'lastname' );
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
					'firstname'	=> $firstname,
					'lastname'	=> $lastname,
					'password'	=> $password
				
				);
				
				$this->model( 'users' )->insert_user( $data );
			
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