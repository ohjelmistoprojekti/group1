<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php R( $_STYLE_URL ); ?>/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php R( $_STYLE_URL ); ?>/signin.css" rel="stylesheet">
  </head>

  <body>
	
    <div class="container">
	  <div class="alert alert-warning"></div>
      <form class="form-signin" id="form" action="index.php?login" method="post" role="form">
	    <h2 class="form-signin-heading">Please sign in</h2>
		<input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>
		<input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
		<button class="btn btn-lg btn-primary btn-block" name="login" id="login" type="submit">Sign in</button>
	  </form>

    </div>
	<script src="<?php R( $_JS_URL ); ?>/jquery-1.11.0.min.js"></script>
	<script>
	
		$( function() {
		
			$( '.alert' ).hide();
		
			$( '#form' ).submit( function( e ) {
			
				e.preventDefault();
				
				var email = $( '#email' ).val();
				var password = $( '#password' ).val();
				
				$.post( 'index.php?login', { 'email' : email, 'password' : password, 'login' : 1 }, function( data ) {
				
					data = JSON.parse( data );
				
					if( data.warning ) {

						$( '.alert' ).html( data.message );
					
						$( '.alert' ).show();
					
					} else if( data.success ) {
					
						window.location = 'index.php';
					
					}
				
				} ).fail( function() {
				
					console.log( 'failed' );
				
				} );
			
			} );
		
		} );
	
	</script>
  </body>
</html>