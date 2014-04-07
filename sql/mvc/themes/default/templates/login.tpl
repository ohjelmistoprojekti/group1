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
	  <?php R( $message ); ?>
      <form class="form-signin" id="form" action="index.php?login" method="post" role="form">
	    <h2 class="form-signin-heading">Please sign in</h2>
		<input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>
		<input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
		<label class="checkbox">
		  <input type="checkbox" value="remember-me"> Remember me
		</label>
		<button class="btn btn-lg btn-primary btn-block" name="login" id="login" type="submit">Sign in</button>
	  </form>

    </div>
	
  </body>
</html>