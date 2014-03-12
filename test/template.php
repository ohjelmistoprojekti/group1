<?php

class Template {

	//Private
	
	private $tplRaw;
	private static $tplVar = array();
	
	private function parse( $tpl_str = '' ) {
	
		$tpl_parsed = empty( $tpl_str ) ? $this->tplRaw : $tpl_str;
		
		preg_match_all( '/\{\# if (.*?) \#\}(.*?)\{\# endif \#\}/s', $tpl_parsed, $if_blocks, PREG_SET_ORDER );
		
		foreach( $if_blocks as $block ) {
		
			
		
			echo $block[ 1 ] . '<br>';
		
		}
		
		echo '<br>';
		
		return $tpl_parsed;
	
	}
	
	//Public
	
	public function __construct( $tpl_file ) {
	
		if( file_exists( $tpl_file ) ) {
		
			$this->tplRaw = file_get_contents( $tpl_file );
		
		}
	
	}
	
	//Renders directly as HTML
	public function render() {
	
		echo $this->parse();
	
	}
	
	//Returns as string
	public function get() {
	
		
	
	}
	
	public static function assign( $key, $val ) {
	
		self::$tplVar[ $key ] = $val;
	
	}
	
	public static function append( $key, $val ) {
	
		if( empty( self::$tplVar[ $key ] ) ) {
		
			self::assign( $key, $val );
		
		} else {
		
			self::$tplVar[ $key ] .= $val;
		
		}
	
	}
	
	public static function prepend( $key, $val ) {
	
		if( empty( self::$tplVar[ $key ] ) ) {
		
			self::assign( $key, $val );
		
		} else {
		
			self::$tplVar[ $key ] = $val . self::$tplVar[ $key ];
		
		}
	
	}

}

$test = new Template( 'test.tpl' );
$test->render();

?>