<html>

	<head>
		<title>Validator</title>
	</head>
	
	<body>
	
		<?
			error_reporting(E_ALL);
			ini_set('display_errors','on');

			include ('data.php');
			
			$user = new userValid();
			$user->Validator();
		?>	
		
	</body>
</html>