<?php

class View {

	//Private
	
	private $tplPath;
	private $tplFile;
	private static $tplVars = array();
	
	private function parse() {
	
		if( empty( $this->tplFile ) ) return;
	
		extract( self::$tplVars );
		ob_start();
		
		include( $this->tplPath . $this->tplFile );
		
		return ob_get_clean();
	
	}
	
	//Public
	
	public function __construct( $tpl_file ) {
		
		global $config;
		
		$path = MVC_THEMES_PATH . $config[ 'theme' ] . '/templates/';

		if( file_exists( $path . $tpl_file ) ) {
		
			self::$tplVars[ '_JS_URL' ]    = MVC_THEMES_PATH . $config[ 'theme' ] . '/js';
			self::$tplVars[ '_IMAGE_URL' ] = MVC_THEMES_PATH . $config[ 'theme' ] . '/images';
			self::$tplVars[ '_STYLE_URL' ] = MVC_THEMES_PATH . $config[ 'theme' ] . '/styles';
		
			$this->tplPath = $path;
			$this->tplFile = $tpl_file;
		
		}
	
	}
	
	//Renders directly as HTML
	public function render() {
	
		echo $this->parse();
	
	}
	
	//Returns as string
	public function get() {
	
		return $this->parse();
	
	}
	
	public static function assign( $key, $val ) {
		
		self::$tplVars[ $key ] = $val;
	
	}
	
	public static function append( $key, $val ) {
	
		if( empty( self::$tplVars[ $key ] ) ) {
		
			self::assign( $key, $val );
		
		} else {
		
			self::$tplVars[ $key ] .= $val;
		
		}
	
	}
	
	public static function prepend( $key, $val ) {
	
		if( empty( self::$tplVars[ $key ] ) ) {
		
			self::assign( $key, $val );
		
		} else {
		
			self::$tplVars[ $key ] = $val . self::$tplVars[ $key ];
		
		}
	
	}

}

?>