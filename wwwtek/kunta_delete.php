<form action="<? echo $softa; ?>" method="post">

<label>ID<br/> </label>
<input type = "text" name = "delete" ><br>

<input type="submit" value="Delete" /> <br>
<input type="reset" value="Reset" />
</form>

<?
	if (isset($_POST['delete']))
	{ 
		$my = $_POST['delete'];

		print "Poistetaan<br>";
		$sql = "DELETE FROM kunnat WHERE id = $my";
		$result = @mysql_query($sql);
		print $sql;
	}
?>
