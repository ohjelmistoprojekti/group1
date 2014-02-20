<html>
	<body>
		<?php
			$link = mysql_connect('10.177.3.206', 'jkleemola', 'Ez7d8zlW');
	
			if (!$link) 
			{
				die('Could not connect: ' . mysql_error());
			}
	
			else 
			{	
				echo 'Connected successfully';
			}
			mysql_close($link);
		?>
	</body>
</html>