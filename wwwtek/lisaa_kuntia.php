<form action="<? echo $softa; ?>" method="post">
	
	<label>Kunnan nimi:<br/> </label>
	<input type = "text" name = "1" ><br>
	<label>Kuntakoodi<br/> </label>
	<input type = "text" name = "2" ><br>
		
	<input type="submit" value="Submit" /> <br>
	<input type="reset" value="Reset" />
</form>

<?

	if (isset($_POST['1']))
	{ $m1 = $_POST['1'];  }
	
	if (isset($_POST['2']))
	{ $m2 = $_POST['2']; }


	if (isset($_POST['1']))
	{
		$sql = "INSERT INTO kunnat (nimi, kuntakoodi) VALUES
		('$m1', '$m2')
		";

		if (mysql_query($sql)) 
		{
			echo '<p>Tiedot lisätty.</p>';
		}
		else
		{
			echo '<p>Ei onnistunut: ';
			mysql_error() . '</p>';
		}

	}

?>

