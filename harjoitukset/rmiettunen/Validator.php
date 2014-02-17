<html>
<head>
</head>
<body>
<?PHP

	error_reporting( E_ALL );
	ini_set( 'display_errors', 'on' );

class UserValidator
{
	private $defaultLogin = 'firstname.lastname@abc.fi';
	
	public function Validate(){
		
		$username = $_POST['username'];
			if(filter_var($username, FILTER_VALIDATE_EMAIL) &&
				($username == $this->defaultLogin) ){
					echo 'Marvelous.';
						
							
		$password = $_POST['password'];
			$salt = 'tg57ik';
			$pw_hashed = hash('sha256', $salt.$password);
			echo $pw_hashed;
			}
		}


}
	
$user = new UserValidator();
$user->Validate();

?>
</body>
</html>