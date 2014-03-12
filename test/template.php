<?php

class Template {

	//Private
	
	private $tplRaw;
	private $tplFile;
	private static $tplVar = array();
	
	private function parse( $tpl_str = '' ) {
	
		$tpl_parsed = empty( $tpl_str ) ? $this->tplRaw : $tpl_str;
		
		preg_match_all( '/\{\# include \'(.*?)\' \#\}/', $tpl_parsed, $includes, PREG_SET_ORDER );
		
		foreach( $includes as $include ) {
		
			$file = trim( $include[ 1 ] );
		
			if( $file != $this->tplFile && file_exists( $file ) )
				$tpl_parsed = str_replace( $include[ 0 ], file_get_contents( $file ), $tpl_parsed );
			else
				$tpl_parsed = str_replace( $include[ 0 ], '', $tpl_parsed );

		}
		
		preg_match_all( '/\{\# (.*?) \#\}(.*?)\{\# end(.*?) \#\}/s', $tpl_parsed, $blocks, PREG_SET_ORDER );
		
		foreach( $blocks as $block ) {
		
			$block[ 3 ] = trim( $block[ 3 ] );
		
			switch( $block[ 3 ] ) {
			
				case 'if':
				
					$delim = '';
					if( strpos( $block[ 1 ], '==' ) != false ) {
						$delim = '==';
					} else if( strpos( $block[ 1 ], '!=' ) != false ) {
						$delim = '!=';
					} else if( strpos( $block[ 1 ], '>' ) != false ) {
						$delim = '>';
					} else if( strpos( $block[ 1 ], '<' ) != false ) {
						$delim = '<';
					} else if( strpos( $block[ 1 ], '>=' ) != false ) {
						$delim = '>=';
					} else if( strpos( $block[ 1 ], '<=' ) != false ) {
						$delim = '<=';
					}
					
					$statement = explode( $delim, $block[ 1 ] );
					$statement[ 0 ] = substr( $statement[ 0 ], 2 );
					$statement[ 0 ] = substr( trim( $statement[ 0 ] ), 1 );
					$statement[ 1 ] = trim( $statement[ 1 ] );

					$evaluate = 'if(';
					$evaluate .= empty( self::$tplVar[ $statement[ 0 ] ] ) ? 'false' : self::$tplVar[ $statement[ 0 ] ];
					$evaluate .= " {$delim} {$statement[ 1 ]}";
					$evaluate .= '){return true;}else{return false;}';
					
					$evaluation = eval( $evaluate );
				
					$data = explode( '{# else #}', $block[ 2 ] );
				
					if( $evaluation ) {
					
						$tpl_parsed = str_replace( $block[ 0 ], $data[ 0 ], $tpl_parsed );
					
					} else {
					
						if( count( $data ) > 1 )
							$tpl_parsed = str_replace( $block[ 0 ], $data[ 1 ], $tpl_parsed );
						else
							$tpl_parsed = str_replace( $block[ 0 ], '', $tpl_parsed );
					
					}
				
					break;
					
				case 'for':
				
					$statement = explode( 'in', $block[ 1 ] );
				
					break;
			
			}
		
		}
		
		
		
		return $tpl_parsed;
	
	}
	
	//Public
	
	public function __construct( $tpl_file ) {
	
		if( file_exists( $tpl_file ) ) {
		
			$this->tplFile = $tpl_file;
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
$test->assign( 'group', 'fug' );
$test->render();

?>