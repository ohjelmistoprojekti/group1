<?php
	error_reporting(E_ALL);
	ini_set('display_errors','on');
?>
<html>
	<body>
		<?
			class userValid 
			{
			
				private $name = 'a@b.fi';
				private $password = '1234';
			
					public function Validator()
					{
						$salt = '4ws5';
						$pw_salted = $salt.$this->password;
						$hashword = hash('sha256', $pw_salted);
					
			
						if (filter_var($_POST['username'], FILTER_VALIDATE_EMAIL))
						{
							if($this->name == $_POST['username'] && $hashword == hash('sha256', $salt.$_POST['password']))
							{
								echo 'Come in, don\'t just stand there!';
							}
	
							else
							{
								echo 'Login failure <br> Username or password do not match';
							}
						}
						
						else 
						{
							echo 'Get out of here stalker!';
						}
				}
			}
			
			$user = new userValid;
			$user->Validator();
		?>
		
	</body>
</html>