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
				echo 'Connected successfully <br>';
				
				$db_selected = mysql_select_db('members', $link);
				
				if (!$db_selected) 
				{
					die ('Can\'t use members : ' . mysql_error());
				}
				else
				{
					$email= 'testuser@email.com';

					$query = sprintf("SELECT email, password FROM members WHERE email='%s'",
					mysql_real_escape_string($email));


					$result = mysql_query($query);


					if (!$result)
					{
						$message  = 'Invalid query: ' . mysql_error() . "\n <br>";
						$message .= 'Whole query: ' . $query;
						die($message);
					}


					while ($row = mysql_fetch_assoc($result)) 
					{
						echo $row['email'];
						echo $row['password'];
					}

					mysql_free_result($result);
				}
			}
			mysql_close($link);
		?>
	</body>
</html>