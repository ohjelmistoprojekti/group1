<?php

class IndexController extends Controller {

	public function __construct() {
	
		parent::__construct();

		echo 'ulinaulina';

	}

	public function test( array $params ) {

		if( isset( $params[ 'test' ] ) ) echo $params[ 'test' ];

		echo 'uliuli';

	}

	public function wololo( array $params ) {

		echo 'wololo';

	}

}

?>
