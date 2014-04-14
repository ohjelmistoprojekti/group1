<?php

if( !defined( 'IN_FW' ) ) exit;

class AdminController extends BaseController {

	public function __construct() {
	
		get_mod( 'auth' );
	
		if( !is_logged_in() || !is_admin() ) $this->error( 403 );
	
		parent::__construct( array(
		
			'users',
			'groups'
		
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
		$admin_tpl->assign( 'users', $this->get_model( 'users' )->get_all_users() );
		$admin_tpl->assign( 'groups', $this->get_model( 'groups' )->get_all_groups() );
		$admin_tpl->assign( 'SECTION_TITLE', trans( 'USER_MANAGEMENT' ) );
		$admin_tpl->assign( 'SECTION_CONTENT', 'admin/users.html' );
		
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
				
				} else {
				
					$p_password = 'generated';
				
				}
				
				$p_group_id = ( $p_group_id == 'none' ) ? '' : $p_group_id;
				
				$data = array(
				
					'email'		=> $p_email,
					'firstname'	=> $p_fname,
					'lastname'	=> $p_lname,
					'password'	=> $p_password,
					'gid'		=> $p_group_id
				
				);
				
				$test = $this->get_model( 'users' );
				$test->insert_user( $data );
				
				$admin_tpl->assign( 'MESSAGE', trans( 'USER_ADDED_SUCCESSFULLY' ) );
				$admin_tpl->assign( 'MESSAGE_TYPE', 'success' );
			
				break;
				
			case 'edit':
			
				
			
				break;
				
			case 'delete':
			
				
			
				break;
		
		}
		
		$admin_tpl->render();
	
	}
	
	public function groups() {
	
		$action = array_keys( $_GET );
		$action = $action[ 0 ];
		if( !empty( $action ) ) {
		
			//Invalid action
			return;
		
		}
		
		array_shift( $_GET );
		
		$admin_tpl = $this->get_view( 'admin/admin.html' );

		switch( $action ) {
		
			case 'add':
			
				
			
				break;
				
			case 'edit':
			
				
			
				break;
				
			case 'delete':
			
				
			
				break;
		
		}
		
		$admin_tpl->render();
	
	}

}

?>