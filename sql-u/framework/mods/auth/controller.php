<?php

if( !defined( 'IN_FW' ) ) exit;

class AuthController extends BaseController {

	//Private
	
	public function reset() {
	
		Session::set( array(
		
			'user'	=> array(
			
				'email'		=> 'anonymous',
				'language'	=> Settings::get( 'language' ),
				'theme'		=> Settings::get( 'theme' ),
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
		
		if( !Session::get( 'user' ) ) $this->reset();
	
	}
	
	public function main() {
	
		$this->login();
	
	}
	
	public function login() {
	
		$login_tpl = $this->get_view( 'auth.html' );
		
		$p_email	= Request::POST( 'email' );
		$p_password = Request::POST( 'password' );
		
		$p_login	= Request::POST( 'login' );

		if( $p_login ) {
			
			if( Session::get( 'user', 'logged_in' ) ) {
			
				echo json_encode( array( 'warning' => true, 'message' => trans( 'ALREADY_LOGGED_IN' ) ) );
				return;
			
			}
			
			if( !$p_email || !$p_password ) {
			
				echo json_encode( array( 'warning' => true, 'message' => trans( 'ALL_FIELDS_REQUIRED' ) ) );
				return;
			
			}
			
			$user_data = $this->get_model( 'auth' )->get_user_by( 'email', $p_email );
			
			if( $p_password == $user_data[ 0 ][ 'password' ] ) {
			//if( hash( 'sha256', $p_password ) == $user_data[ 0 ][ 'password' ] ) {
			
				Session::set( array( 'user' => array(
				
					'email'		=> $user_data[ 0 ][ 'email' ],
					'language'	=> $user_data[ 0 ][ 'language' ],
					'theme'		=> $user_data[ 0 ][ 'theme' ],
					'userlevel'	=> $user_data[ 0 ][ 'userlevel' ],
					'logged_in'	=> 1
				
				) ) );
			
				echo json_encode( array( 'success' => true ) );
			
			} else {
			
				echo json_encode( array( 'warning' => true, 'message' => trans( 'INVALID_USERNAME_OR_PASSWORD' ) ) );
			
			}
		
		} else {
		
			$login_tpl->render();
		
		}
	
	}
	
	public function logout() {
	
		$login_tpl = $this->get_view( 'auth.html' );
	
		if( !Session::get( 'user', 'logged_in' ) ) {
		
			$login_tpl->render();
			return;
		
		}
		
		$_SESSION[ 'user' ] = NULL;
		unset( $_SESSION[ 'user' ] );
		
		$temp = $_SESSION;
		
		session_regenerate_id( true );
		
		$_SESSION = $temp;
		
		$this->reset();
		
		$login_tpl->assign( 'LOGGED_OUT', trans( 'LOGOUT_SUCCESSFUL' ) );
		
		$login_tpl->render();
	
	}

}

?>