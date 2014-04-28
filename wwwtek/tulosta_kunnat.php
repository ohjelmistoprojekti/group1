<form action="<? echo $softa; ?>" method="post">
	<input type="SUBMIT" value="Tulosta taulu" name="tulosta" /> <br>
</form>
<?
if (isset($_POST['tulosta']))
	{
		print "Kunnat:";

		$result = @mysql_query('SELECT * FROM kunnat');
		print "<TABLE BORDER=1 BGCOLOR='808080'>";
		while ( $row = mysql_fetch_array( $result ) )
		{
			print "<TR><TD>$row[0] </td><TD>$row[1] </td><TD>$row[2] </td></tr>";
		}
		print "</TABLE>\n";
	}
?>
