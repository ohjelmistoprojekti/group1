<?php

class AuthController extends Controller {

	//Private
	
	private function reset_session_data() {
	
		global $config;
	
		Session::set( array(
			
			'user'		=> array(
			
				'email'		=> '',
				'language'	=> $config[ 'language' ],
				'userlevel'	=> -1,
				'logged_in'	=> 0
			
			)
			
		) );
	
	}
	
	//Public

	public function __construct() {
	
		parent::__construct( array(
		
			'login',
			'logout'
		
		) );

		if( empty( $_SESSION[ 'user' ] ) ) $this->reset_session_data();
	
	}
	
	public function main( $request ) {
	
		$page_view = $this->view( 'login.tpl' );
		$page_view->render();
	
	}
	
	public function login( $request ) {

		$p_login = $request->POST( 'login' );

		if( Session::get( 'user', 'logged_in' ) ) {
		
			$page_view = $this->view( 'login.tpl' );
			$page_view->assign( 'message', $page_view->warning( L( 'ALREADY_LOGGED_IN' ) )->get() );
			$page_view->render();
		
			return;
		
		}
		
		if( isset( $p_login ) ) {
		
			$p_email = $request->POST( 'email' );
			$p_password = $request->POST( 'password' );
			
			$data = $this->model( 'auth' )->get_data_by_email( $p_email );

			if( isset( $data[ 0 ] ) && $data[ 0 ][ 'password' ] == $p_password ) {
			
				Session::set( array(
				
					'user'			=> array(
				
						'email'			=> $data[ 0 ][ 'email' ],
						'language'		=> $data[ 0 ][ 'language' ],
						'userlevel'		=> $data[ 0 ][ 'userlevel' ],
						'logged_in'		=> 1
					
					)
				
				) );
				
				redirect( 'index.php' );
			
			} else {
			
				$page_view = $this->view( 'login.tpl' );
				$page_view->assign( 'message', $page_view->warning( L( 'INVALID_USERNAME_OR_PASSWORD' ) )->get() );
				$page_view->render();
			
			}
		
		} else {
		
			//redirect( 'index.php' );
		
		}
	
	}
	
	public function logout( $request ) {
	
		if( !Session::get( 'user', 'logged_in' ) ) {
		
			$page_view = $this->view( 'page.tpl' );
			$page_view->assign( 'content', $page_view->warning( L( 'ALREADY_LOGGED_OUT' ) )->get() );
		
		}
	
		$_SESSION[ 'user' ] = array();
		unset( $_SESSION[ 'user' ] );
		
		$temp = $_SESSION;
	
		session_regenerate_id( true );
		
		$_SESSION = $temp;
		
		$this->reset_session_data();
		
		redirect( 'index.php' );
	
	}
	
}

?>