<?php

if( !defined( 'IN_FW' ) ) exit;

class AdminController extends BaseController {

	//Private
	
	private function generatePassword() {
	
		return substr( str_shuffle( '.-%&?#0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ' ), 0, 12 );
	
	}

	//Public

	public function __construct() {
	
		get_mod( 'auth' );
	
		if( !is_logged_in() || !is_admin() ) $this->error( 403 );
	
		parent::__construct( array(
		
			'users',
			'groups',
			'assignments'
		
		) );
	
	}
	
	public function main() {
	
		$admin_tpl = $this->get_view( 'admin/admin.html' );
		
		$admin_tpl->render();
	
	}
	
	public function users() {
	
		$action = array_keys( $_GET );
		$action = $action[ 0 ];
		
		array_shift( $_GET );
		
		$admin_tpl = $this->get_view( 'admin/admin.html' );
		$admin_tpl->assign( 'in_user_management', true );
		
		switch( $action ) {
		
			case 'add':
			
				$p_email = Request::POST( 'email' );
				$p_fname = Request::POST( 'firstname' );
				$p_lname = Request::POST( 'lastname' );
				$p_password = Request::POST( 'password' );
				$p_password_again = Request::POST( 'retype_password' );
				$p_generate_password = Request::POST( 'generate_password' );
				$p_group_id = Request::POST( 'group' );
				
				if( empty( $p_email ) || empty( $p_fname ) || empty( $p_lname ) ) {
				
					$admin_tpl->assign( 'MESSAGE', trans( 'ALL_FIELDS_REQUIRED' ) );
					$admin_tpl->assign( 'MESSAGE_TYPE', 'danger' );
					break;
				
				}
				
				if( !$p_generate_password ) {
				
					if( empty( $p_password ) || empty( $p_pasword_again ) ) {
					
						$admin_tpl->assign( 'MESSAGE', trans( 'ALL_FIELDS_REQUIRED' ) );
						$admin_tpl->assign( 'MESSAGE_TYPE', 'danger' );
						break;
					
					}
					
					if( $p_password != $p_password_again ) {
					
						$admin_tpl->assign( 'MESSAGE', trans( 'PASSWORDS_DID_NOT_MATCH' ) );
						$admin_tpl->assign( 'MESSAGE_TYPE', 'danger' );
						break;
					
					}
					
					//$p_password = hash( 'sha256', $p_password );
				
				} else {
				
					$p_password = $this->generatePassword();
					
					//mail( $p_email, trans( 'SQL_TOOL_CREDENTIALS' ), trans( 'EMAIL' ) . ": {$p_email}<br>" . trans( 'PASSWORD' ) . ": {$p_password}" );
					
					//$p_password = hash( 'sha256', $p_password );
				
				}
				
				$p_group_id = ( $p_group_id == 'none' ) ? '' : $p_group_id;
				
				$data = array(
				
					'email'		=> $p_email,
					'firstname'	=> $p_fname,
					'lastname'	=> $p_lname,
					'password'	=> $p_password,
					'gid'		=> $p_group_id
				
				);
				
				$users_model = $this->get_model( 'users' );
				
				if( !$users_model->user_exists( $p_email ) ) {
				
					$this->get_model( 'users' )->insert_user( $data );
				
					$admin_tpl->assign( 'MESSAGE', trans( 'USER_ADDED_SUCCESSFULLY' ) );
					$admin_tpl->assign( 'MESSAGE_TYPE', 'success' );
				
				} else {
				
					$admin_tpl->assign( 'MESSAGE', trans( 'USER_ALREADY_EXISTS' ) );
					$admin_tpl->assign( 'MESSAGE_TYPE', 'danger' );
				
				}
			
				break;
				
			case 'edit':
			
				$g_id = Request::GET( 'id' );
				$g_edit = Request::GET( 'submit' );
				
				if( $g_edit ) {
				
					$p_group = Request::POST( 'group' );
					$p_fname = Request::POST( 'firstname' );
					$p_lname = Request::POST( 'lastname' );
					$p_generate_password = Request::POST( 'generate_password' );
					
					$data = array();
					
					if( empty( $p_fname ) || empty( $p_lname ) ) {
					
						$admin_tpl->assign( 'MESSAGE', trans( 'ALL_FIELDS_REQUIRED' ) );
						$admin_tpl->assign( 'MESSAGE_TYPE', 'danger' );
						break;
					
					}
					
					$data = array( 
					
						'gid'			=> $p_group,
						'firstname'		=> $p_fname,
						'lastname'		=> $p_lname
					
					);
					
					if( $p_generate_password ) {
					
						$data[ 'password' ] = $this->generatePassword();
						//$data[ 'password' ] = hash( 'sha256', $this->generatePassword() );
					
					} else {
					
						$p_password = Request::POST( 'password' );
						$p_password_again = Request::POST( 'retype_password' );
					
						if( !empty( $p_password ) && !empty( $p_password_again ) ) {
						
							if( $p_password == $p_password_again ) {
						
								$data[ 'password' ] = $p_password;
								//$data[ 'password' ] = hash( 'sha256', $p_password );
							
							} else {
							
								$admin_tpl->assign( 'MESSAGE', trans( 'PASSWORDS_DID_NOT_MATCH' ) );
								$admin_tpl->assign( 'MESSAGE_TYPE', 'danger' );
								break;
							
							}
						
						}
					
					}
					
					$this->get_model( 'users' )->update_user( $data, $p_email );
					
					$admin_tpl->assign( 'MESSAGE', trans( 'USER_EDITED_SUCCESSFULLY' ) );
					$admin_tpl->assign( 'MESSAGE_TYPE', 'success' );
				
				} else if( $g_id ) {
				
					$data = $this->get_model( 'auth' )->get_user_by( 'id', $g_id );
				
					$admin_tpl->assign( 'show_edit_form', true );
					$admin_tpl->assign( 'user', $data );
				
				}
			
				break;
				
			case 'delete':

				if( empty( $_POST[ 'user_id' ] ) ) {
				
					$admin_tpl->assign( 'MESSAGE', trans( 'NO_USERS_SELECTED' ) );
					$admin_tpl->assign( 'MESSAGE_TYPE', 'danger' );
					break;
				
				}
			
				foreach( $_POST[ 'user_id' ] as $user_id ) {
					
					$this->get_model( 'users' )->delete_user( $user_id );
				
				}
				
				$admin_tpl->assign( 'MESSAGE', trans( 'USERS_DELETED_SUCCESSFULLY' ) );
				$admin_tpl->assign( 'MESSAGE_TYPE', 'success' );
			
				break;
		
		}
		
		$admin_tpl->assign( 'users', $this->get_model( 'users' )->get_all_users() );
		$admin_tpl->assign( 'groups', $this->get_model( 'groups' )->get_all_groups() );
		$admin_tpl->assign( 'SECTION_TITLE', trans( 'USER_MANAGEMENT' ) );
		$admin_tpl->assign( 'SECTION_CONTENT', 'admin/users.html' );
		
		$admin_tpl->render();
	
	}
	
	public function groups() {
	
		$action = array_keys( $_GET );
		$action = $action[ 0 ];
		if( !empty( $_GET[ $action ] ) ) {
		
			//Invalid action
			return;
		
		}
		
		array_shift( $_GET );
		
		$admin_tpl = $this->get_view( 'admin/admin.html' );
		$admin_tpl->assign( 'in_group_management', true );

		switch( $action ) {
		
			case 'add':
			
				$p_group_name = Request::POST( 'group_name' );
				
				if( empty( $p_group_name ) ) {
				
					$admin_tpl->assign( 'MESSAGE', trans( 'ALL_FIELDS_REQUIRED' ) );
					$admin_tpl->assign( 'MESSAGE_TYPE', 'danger' );
					break;
				
				}
				
				$data = array( 'name' => $p_group_name );
				
				$this->get_model( 'groups' )->insert_group( $data );
			
				$admin_tpl->assign( 'MESSAGE', trans( 'GROUP_ADDED_SUCCESSFULLY' ) );
				$admin_tpl->assign( 'MESSAGE_TYPE', 'success' );
			
				break;
				
			case 'edit':
			
				$g_id = Request::GET( 'id' );
				$g_submit = Request::GET( 'submit' );
				
				if( $g_submit ) {
				
					$p_group_name = Request::POST( 'group_name' );
					
					if( empty( $p_group_name ) ) {
					
						$admin_tpl->assign( 'MESSAGE', trans( 'ALL_FIELDS_REQUIRED' ) );
						$admin_tpl->assign( 'MESSAGE_TYPE', 'danger' );
						break;
					
					}
					
					$data = array( 'name' => $p_group_name );
					
					$this->get_model( 'groups' )->update_group( $data, $g_id );
				
					$admin_tpl->assign( 'MESSAGE', trans( 'GROUP_EDITED_SUCCESSFULLY' ) );
					$admin_tpl->assign( 'MESSAGE_TYPE', 'success' );
				
				} else if( $g_id ) {
				
					$data = $this->get_model( 'groups' )->get_group_by( 'id', $g_id );

					$admin_tpl->assign( 'show_edit_form', true );
					$admin_tpl->assign( 'group', $data );
				
				}
			
				break;
				
			case 'delete':
			
				if( empty( $_POST[ 'group_id' ] ) ) {
				
					$admin_tpl->assign( 'MESSAGE', trans( 'NO_GROUPS_SELECTED' ) );
					$admin_tpl->assign( 'MESSAGE_TYPE', 'danger' );
					break;
				
				}
			
				foreach( $_POST[ 'group_id' ] as $group_id ) {
					
					$this->get_model( 'groups' )->delete_group( $group_id );
				
				}
				
				$admin_tpl->assign( 'MESSAGE', trans( 'GROUPS_DELETED_SUCCESSFULLY' ) );
				$admin_tpl->assign( 'MESSAGE_TYPE', 'success' );
			
				break;
		
		}
		
		$admin_tpl->assign( 'assignments', $this->get_model( 'assignments' )->get_all_assignments() );
		$admin_tpl->assign( 'groups', $this->get_model( 'groups' )->get_all_groups() );
		$admin_tpl->assign( 'SECTION_TITLE', trans( 'GROUP_MANAGEMENT' ) );
		$admin_tpl->assign( 'SECTION_CONTENT', 'admin/groups.html' );
		
		$admin_tpl->render();
	
	}
	
	public function assignments() {
	
		$action = array_keys( $_GET );
		$action = $action[ 0 ];
		if( !empty( $_GET[ $action ] ) ) {
		
			//Invalid action
			return;
		
		}
		
		array_shift( $_GET );
		
		$admin_tpl = $this->get_view( 'admin/admin.html' );
		$admin_tpl->assign( 'in_assignment_management', true );

		switch( $action ) {
		
			case 'add':
			
				$p_name = Request::POST( 'assignment_name' );
				$p_description = Request::POST( 'assignment_description' );
				$p_ex_answer = Request::POST( 'assignment_exanswer' );
				$p_show_ex_answer = Request::POST( 'show_example_answer' );
		
				if( empty( $p_name ) || empty( $p_description ) || empty( $p_ex_answer ) ) {
				
					$admin_tpl->assign( 'MESSAGE', trans( 'ALL_FIELDS_REQUIRED' ) );
					$admin_tpl->assign( 'MESSAGE_TYPE', 'danger' );
					break;
				
				}
				
				$data = array(
				
					'name'			=> $p_name,
					'description'	=> $p_description,
					'exAnswer'		=> $p_ex_answer,
					'showExAnswer'	=> $p_show_ex_answer
					
				);
				
				$this->get_model( 'assignments' )->insert_assignment( $data );
			
				$admin_tpl->assign( 'MESSAGE', trans( 'ASSIGNMENT_ADDED_SUCCESSFULLY' ) );
				$admin_tpl->assign( 'MESSAGE_TYPE', 'success' );
			
				break;
				
			case 'edit':
			
				$g_id = Request::GET( 'id' );
				$g_submit = Request::GET( 'submit' );
				
				if( $g_submit ) {
				
					$p_group_name = Request::POST( 'group_name' );
					
					if( empty( $p_group_name ) ) {
					
						$admin_tpl->assign( 'MESSAGE', trans( 'ALL_FIELDS_REQUIRED' ) );
						$admin_tpl->assign( 'MESSAGE_TYPE', 'danger' );
						break;
					
					}
					
					$data = array( 'name' => $p_group_name );
					
					$this->get_model( 'groups' )->update_group( $data, $g_id );
				
					$admin_tpl->assign( 'MESSAGE', trans( 'ASSIGNMENTS_EDITED_SUCCESSFULLY' ) );
					$admin_tpl->assign( 'MESSAGE_TYPE', 'success' );
				
				} else if( $g_id ) {
				
					$data = $this->get_model( 'groups' )->get_group_by( 'id', $g_id );

					$admin_tpl->assign( 'show_edit_form', true );
					$admin_tpl->assign( 'group', $data );
				
				}
			
				break;
				
			case 'delete':
			
				if( empty( $_POST[ 'assignment_id' ] ) ) {
				
					$admin_tpl->assign( 'MESSAGE', trans( 'NO_ASSIGNMENTS_SELECTED' ) );
					$admin_tpl->assign( 'MESSAGE_TYPE', 'danger' );
					break;
				
				}
			
				foreach( $_POST[ 'assignment_id' ] as $assg_id ) {
					
					$this->get_model( 'assignments' )->delete_group( $aasg_id );
				
				}
				
				$admin_tpl->assign( 'MESSAGE', trans( 'ASSIGNMENTS_DELETED_SUCCESSFULLY' ) );
				$admin_tpl->assign( 'MESSAGE_TYPE', 'success' );
			
				break;
		
		}
		
		$admin_tpl->assign( 'groups', $this->get_model( 'groups' )->get_all_groups() );
		$admin_tpl->assign( 'assignments', $this->get_model( 'assignments' )->get_all_assignments() );
		$admin_tpl->assign( 'SECTION_TITLE', trans( 'ASSIGNMENT_MANAGEMENT' ) );
		$admin_tpl->assign( 'SECTION_CONTENT', 'admin/assignments.html' );
		
		$admin_tpl->render();
	
	}

}

?>