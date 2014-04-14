<?php

if( !defined( 'IN_FW' ) ) exit;

class AdminController extends BaseController {

	public function __construct() {
	
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
		if( !empty( $action ) ) {
		
			//Invalid action
			return;
		
		}
		
		array_shift( $_GET );
		
		switch( $action ) {
		
			case 'add':
			
				
			
				break;
				
			case 'edit':
			
				
			
				break;
				
			case 'delete':
			
				
			
				break;
		
		}
	
	}
	
	public function groups() {
	
		
	
	}

}

?>