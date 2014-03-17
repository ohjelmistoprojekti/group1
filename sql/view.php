<?php

class View {

	//Private
	
	private $templateFile;
	private static $templateVars = array();
	
	private function parse() {
	
		extract( self::$templateVars );
		ob_start();
		
		include( $this->templateFile );
		
		return ob_get_clean();
	
	}
	
	//Public
	
	public function __construct( $tpl_file ) {
		
		if( file_exists( $tpl_file ) ) {
		
			$this->templateFile = $tpl_file;
		
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
		
		self::$templateVars[ $key ] = $val;
	
	}
	
	public static function append( $key, $val ) {
	
		if( empty( self::$templateVars[ $key ] ) ) {
		
			self::assign( $key, $val );
		
		} else {
		
			self::$templateVars[ $key ] .= $val;
		
		}
	
	}
	
	public static function prepend( $key, $val ) {
	
		if( empty( self::$templateVars[ $key ] ) ) {
		
			self::assign( $key, $val );
		
		} else {
		
			self::$templateVars[ $key ] = $val . self::$templateVars[ $key ];
		
		}
	
	}

}

?>
