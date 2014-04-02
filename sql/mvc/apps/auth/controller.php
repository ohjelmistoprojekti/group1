<?php

class AuthController extends Controller {

	//Private
	
	private function reset_session_data() {
	
		global $config;
	
		$_SESSION[ 'user' ] = array(
			
			'username'	=> 'anonymous',
			'email'		=> '',
			'language'	=> $config[ 'language' ],
			'group'		=> -1,
			'logged_in'	=> 0
			
		);
	
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
	
		$this->login( $request );
	
	}
	
	public function login( $request ) {
	
		$p_login = $request->POST( 'login' );

		if( $_SESSION[ 'user' ][ 'logged_in' ] ) {
		
			$message = $this->view( 'message.tpl' );
			$message->assign( 'message_type', 'alert' );
			$message->assign( 'message_content', L( 'ALREADY_LOGGED_IN' ) );
			
			$page_view = $this->view( 'page.tpl' );
			$page_view->assign( 'message', $message->get() );
			$page_view->render();
		
			return;
		
		}
		
		if( $p_login ) {
		
			$p_username = $request->POST( 'username' );
			$p_password = $request->POST( 'password' );
			
			$data = $this->model( 'auth' )->get_user_data( $p_username );

			if( isset( $data[ 0 ] ) && $data[ 0 ][ 'password' ] == $p_password ) {
			
				$_SESSION[ 'user' ] = array(
				
					'username'		=> $data[ 0 ][ 'username' ],
					'email'			=> $data[ 0 ][ 'email' ],
					'language'		=> $data[ 0 ][ 'language' ],
					'group'			=> $data[ 0 ][ 'group' ],
					'logged_in'		=> 1
				
				);
			
			} else {
			
				$message = $this->view( 'message.tpl' );
				$message->assign( 'message_type', 'alert' );
				$message->assign( 'message_content', L( 'INVALID_USERNAME_OR_PASSWORD' ) );
			
				$page_view = $this->view( 'page.tpl' );
				$page_view->assign( 'message', $message->get() );
				$page_view->assign( 'content', $this->view( 'login.tpl' )->get() );
				$page_view->render();
			
			}
		
		} else {
		
			$page_view = $this->view( 'page.tpl' );
			$page_view->assign( 'content', $this->view( 'login.tpl' )->get() );
			$page_view->render();
		
		}
	
	}
	
	public function logout( $request ) {
	
		if( !$_SESSION[ 'user' ][ 'logged_in' ] ) {
		
			$page_view = $this->view( 'page.tpl' );
			$page_view->assign( 'content', $this->view( 
		
		}
	
		$_SESSION[ 'user' ] = array();
		unset( $_SESSION[ 'user' ] );
		
		$temp = $_SESSION;
	
		session_regenerate_id( true );
		
		$_SESSION = $temp;
		
		$this->reset_session_data();
	
	}
	
}

?>