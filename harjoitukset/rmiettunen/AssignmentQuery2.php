<html>
	<body>
		<?php

			$emailRefer = 'testuser@email.com';
			$salt = 'oprj';
			$passwordRefer = 'PASSWORD_HERE';
			
			$link = mysqli_connect('10.177.3.206', 'rmiettunen', 'EevJ6y97', 'Group1');

			if(!$link)
			{
				exit('Connection Failed' . mysqli_error());
			}
			else
			{	
				echo 'Connected';	
				printf ($link->host_info . '<br>');
				printf ('Client version: ' . $link->client_version . '<br>');

				$emailQuery = $emailRefer;

				if ($stmt = $link->prepare("SELECT password FROM members WHERE email=?"))
				{			

					$stmt->bind_param("s", $emailQuery);

					$stmt->execute();

					$stmt->bind_result($passwordQuery);

					$stmt->fetch();

					printf($emailQuery, $passwordQuery);

					$stmt->close();

				}
				
				if ($emailRefer == $emailQuery && $passwordQuery == hash('sha1', $salt.$passwordRefer))
				{
					printf ('Email and password do match.<br>');
				}
				else
				{
					printf('Email and password do not match.<br>');
				}
			}
			
			$link->close();
			printf ('Connection closed.');


		?>
	</body>
</html>