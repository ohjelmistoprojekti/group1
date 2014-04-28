<form action="<? echo $softa; ?>" method="post">
	<input type="SUBMIT" value="Luo taulu" name="luo" /> <br>
</form>
<?
	if (isset($_POST['luo']))
	{
		$sql = 'CREATE TABLE kunnat 
		(
			id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
			nimi TEXT NOT NULL,
			kuntakoodi TEXT NOT NULL
		)';

		if (mysql_query($sql)) 
		{
			echo '<p>taulu luotu!</p>';
		} 
	
		else	
		{
			echo '<p>taulua ei voitu luoda: ' . mysql_error() . '</p>';
		}
	}
?>
