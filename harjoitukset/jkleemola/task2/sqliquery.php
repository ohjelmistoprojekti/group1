<html>
	<body>
		<?php
			$host = '10.177.3.206';
			$username = 'jkleemola';
			$passwordLogin = 'Ez7d8zlW';
			$database = 'Group1';
			
			$emailRefer = 'testuser@email.com';
			$salt = 'oprj';
			$passwordRefer = 'PASSWORD_HERE';
			
			$link = new mysqli($host, $username, $passwordLogin, $database);
	
			if (mysqli_connect_errno()) 
			{
				printf ("Connect failed: %s\n", mysqli_connect_error());
			}
			else 
			{
				printf ('Connection successful.<br>');
				printf ($link->host_info . '<br>');
				printf ('Client version: ' . $link->client_version . '<br>');
				
				$emailQuery = $emailRefer;
				
				if ($stmt = $link->prepare("SELECT password FROM members WHERE email=?")) 
				{

					$stmt->bind_param("s", $emailQuery);

					$stmt->execute();

					$stmt->bind_result($passwordQuery);

					$stmt->fetch();
					
					printf('Email debug: %s <br>' . 'Password debug: %s<br>', $emailQuery, $passwordQuery);
					
					$stmt->close();
				}
				
				if ($emailRefer == $emailQuery && $passwordQuery == hash('sha1', $salt.$passwordRefer))
				{
					printf ('Email and password match!<br>');
				}
				
				else
				{
					printf('Email or password DO NOT match!<br>');
				}
				
				$link->close();
				printf ('Connection closed.');
			}
		?>
	</body>
</html>