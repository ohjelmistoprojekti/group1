<html>
<body>
<?php
	$link = mysql_connect('10.177.3.206', 'rmiettunen', 'EevJ6y97');
	
	if(!$link)
	{
	exit('Connection Failed' . mysql_error());
	}	
	
else
	{	
	echo 'Connected';
	}
	mysql_close($link);
?>
</body>
</html>