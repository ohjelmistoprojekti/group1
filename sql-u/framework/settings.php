<?php

if( !defined( 'IN_FW' ) ) exit;

$settings = array(

	'language'	=> 'en',
	
	'theme'		=> 'default',
	
	'twig'		=> array(
	
		'cache'		=> FW_PATH . 'twig_cache'
	
	),
	
	'mysql'		=> array(
	
		'host'		=> 'localhost',
		'user'		=> '',
		'pass'		=> '',
		'data'		=> 'Group1',
		'prefix'	=> ''
	
	)

);

?>
