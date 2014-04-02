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
		
		$user_form = $this->view( 'admin/user_form.tpl' );
		$user_form->assign( 'in_add_user', 1 );
		$user_form->assign( 'user_form_type', 'ADD_USER' );
		
		$admin_page->assign( 'user_form', $user_form->get() );
		$admin_page->assign( 'section_content', $users_page->get() );
		$admin_page->render();
	
	}

}

?>