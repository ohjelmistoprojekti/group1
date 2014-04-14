<?php

if( !defined( 'IN_FW' ) ) exit;

include( FW_LIBS_PATH . 'Twig/Autoloader.php' );

Twig_Autoloader::register();

final class View {

	//Private
	
	private static $twig_vars = array();
	private static $twig_loader;
	private static $twig_environment;
	
	private $twig_tpl;

	//Public
	
	public function __construct( $tpl_file ) {
		
		if( !isset( self::$twig_loader ) ) {
		
			$tpl_path = FW_THEMES_PATH . Settings::get( 'theme' ) . '/templates';
		
			self::$twig_loader = new Twig_Loader_Filesystem( $tpl_path );
		
		}
		
		if( !isset( self::$twig_environment ) && isset( self::$twig_loader ) ) {
		
			self::$twig_environment = new Twig_Environment( self::$twig_loader, array(
			
				'auto_reload'	=> true,
				'cache'			=> Settings::get( 'twig', 'cache' )
			
			) );
			
			$trans = new Twig_SimpleFunction( 'trans', 'trans' );
			self::$twig_environment->addFunction( $trans );
		
		}
		
		self::assign( '_JS_PATH', FW_THEMES_PATH . Settings::get( 'theme' ) . '/js' );
		self::assign( '_STYLES_PATH', FW_THEMES_PATH . Settings::get( 'theme' ) . '/styles' );
		self::assign( '_IMAGES_PATH', FW_THEMES_PATH . Settings::get( 'theme' ) . '/images' );
		
		$this->twig_tpl = self::$twig_environment->loadTemplate( $tpl_file );
	
	}
	
	public function render() {
	
		if( !isset( $this->twig_tpl ) || !is_a( $this->twig_tpl, 'Twig_Template' ) ) return;
	
		$this->twig_tpl->display( self::$twig_vars );
	
	}
	
	public function get() {
	
		if( !isset( $this->twig_tpl ) || !is_a( $this->twig_tpl, 'Twig_Template' ) ) return;
	
		return $this->twig_tpl->render( self::$twig_vars );
	
	}
	
	public static function assign( $key, $val ) {
		
		self::$twig_vars[ $key ] = $val;
	
	}
	
	public static function append( $key, $val ) {
	
		if( empty( self::$twig_vars[ $key ] ) ) {
		
			self::assign( $key, $val );
		
		} else {
		
			self::$twig_vars[ $key ] .= $val;
		
		}
	
	}
	
	public static function prepend( $key, $val ) {
	
		if( empty( self::$twig_vars[ $key ] ) ) {
		
			self::assign( $key, $val );
		
		} else {
		
			self::$twig_vars[ $key ] = $val . self::$twig_vars[ $key ];
		
		}
	
	}

}

?>