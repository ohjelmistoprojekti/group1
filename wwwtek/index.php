<html>
	<?
		$softa =  $_SERVER['PHP_SELF'];
	?>

		<?
		$host = '10.177.3.206';
		$username = 'jkleemola';
		$password = 'Ez7d8zlW';
		$database = 'jkleemola';
				
		$yhteys = mysql_connect($host, $username, $password);
		
		if (!$yhteys)
		{
			echo '<p>Ei onnaa kytkeytyminen nyt.</p>' ;
			exit();
		}
		
		$select = mysql_select_db($database, $yhteys);
		
		if (!$select) 
		{
			exit('<p>valitseminen ei onnaa.</p>');
		}
		else
		{
			echo '<p>Yhteys onnistunut</p>';
		}
		?>
		
		<body>
		
			<div>
				<? include ('luokuntataulu.php'); ?>
			</div>
			
			<div>
				<? include ('lisaa_kuntia.php'); ?>
			</div>
			
			<div>
				<? include ('tulosta_kunnat.php'); ?>
			</div>
			
			<div>
				<? include ('kunta_delete.php'); ?>
			</div>
			
		</body>
</html>
