<?php
error_reporting(E_ALL);
ini_set('display_errors','on');
if($_POST["login"])
	{
		echo "Data received! <br>";
		echo $_POST["name"];
		echo $_POST["password"];
	}


?>
<html>
	<body>

		<form action="form.php" method="post">
			Name: <input type="text" name="name"><br>
			Password: <input type="password" name="password"><br>
			<input type="submit" name="login">
			
		</form>

	</body>
</html>