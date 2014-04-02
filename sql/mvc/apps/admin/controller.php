<?php

class AdminController extends Controller {

	public function __construct() {
	
		parent::__construct( array(
		
			'users'
		
		) );
	
	}
	
	public function main( $request ) {
	
		$admin_page = $this->view( 'admin/admin.tpl' );
		$admin_page->render();
	
	}
	
	public function users( $request ) {
	
		$admin_page = $this->view( 'admin/admin.tpl' );
		$users_page = $this->view( 'admin/users.tpl' );
		
		$admin_page->assign( 'section_content', $users_page->get() );
		$admin_page->render();
	
	}

}

?>