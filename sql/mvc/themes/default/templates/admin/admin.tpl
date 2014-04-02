<!DOCTYPE html><html lang="en">  <head>    <meta charset="utf-8">    <meta http-equiv="X-UA-Compatible" content="IE=edge">    <meta name="viewport" content="width=device-width, initial-scale=1">    <meta name="description" content="">    <meta name="author" content="">    <title>Dashboard Template for Bootstrap</title>    <!-- Bootstrap core CSS -->    <link href="<?php R( $_STYLE_URL ); ?>/bootstrap.min.css" rel="stylesheet">    <!-- Custom styles for this template -->    <link href="<?php R( $_STYLE_URL ); ?>/dashboard.css" rel="stylesheet">  </head>  <body>    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">      <div class="container-fluid">        <div class="navbar-header">          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">            <span class="sr-only">Toggle navigation</span>            <span class="icon-bar"></span>            <span class="icon-bar"></span>            <span class="icon-bar"></span>          </button>          <a class="navbar-brand" href="#">Project name</a>        </div>      </div>    </div>    <div class="container-fluid">      <div class="row">        <div class="col-sm-3 col-md-2 sidebar">          <ul class="nav nav-sidebar">            <li><a href="admin.php?users"><?php echo L( 'USERS' ); ?></a></li>            <li><a href="#"><?php echo L( 'ASSIGNMENTS' ); ?></a></li>          </ul>          <ul class="nav nav-sidebar">            <li><a href=""><?php echo L( 'LOGOUT' ); ?></a></li>          </ul>        </div>        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">          <h1 class="page-header">Dashboard</h1>          <?php R( $message ); ?>          <h2 class="sub-header">Section title</h2>          <?php R( $section_content ); ?>        </div>      </div>    </div>    <!-- Bootstrap core JavaScript    ================================================== -->    <!-- Placed at the end of the document so the pages load faster -->    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>    <script src="<?php R( $_JS_URL ); ?>/bootstrap.min.js"></script>	<script src="<?php R( $_JS_URL ); ?>/admin.js"></script>  </body></html>