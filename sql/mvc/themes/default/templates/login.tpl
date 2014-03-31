<form method="post" action="auth.php?login">
  <div><?php echo L( 'USERNAME' ); ?></div>
  <input type="text" name="username">
  <div><?php echo L( 'PASSWORD' ); ?></div>
  <input type="password" name="password">
  <input type="submit" name="login" value="<?php echo L( 'LOGIN' ); ?>">
</form>
