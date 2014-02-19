<!DOCTYPE html>
<html>
  <head>
    <title>Log In - PHP</title>
  </head>
  <body>
    <?php

    //Branch Test

    if( $_POST != null ) {

    ?>
    <div>Entered username: <?php echo $_POST[ 'username' ]; ?></div>
    <div>Entered password: <?php echo $_POST[ 'password' ]; ?></div>

    <?php
    
    } else {

    ?>
    <div>Error</div>
    <?php

    }

    ?>
  </body>
</html>
