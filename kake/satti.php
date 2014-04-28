<?

session_start();

?>

 

<form  action =  "satti.php" method = "post">

Nikkisi: <br>

<input type=text name="nikki">  <br>

Viestisi: <br>

<input type=text name="viesti">  <br>

<input type=submit name="send" value="Lähetä">  <br>

</form>

 

<?

// Kirjoitetaan tiedostoon

if (isset($_POST['nikki']))

{

  $nik = $_POST['nikki'];

  if ( !$_POST['nikki'] == "")

  $_SESSION["nikki"] = $nik;

}

if (isset($_POST['viesti']))

{

   $v = $_POST['viesti'];

   $tt = fopen("satti.txt", "a");

   fwrite($tt, $_SESSION["nikki"] . ": " .$v . "\n");

   fclose($tt);

}

$tiedosto = file("satti.txt");

$riveja = count($tiedosto);

for ($k = $riveja - 1; $k > 0; $k--)

    print $tiedosto[$k] . "<br>";

 

 

?>