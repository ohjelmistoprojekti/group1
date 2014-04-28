<?
$luvut = array (1,3, 5, 999, -3, 100);

for ($k = 0; $k < count($luvut); $k++)
	print "	" . $luvut[$k];

for ($k = 0; $k <count($luvut); $k++)	
    for ($s = $k + 1; $s < count($luvut); $s++)

        if ($luvut[$k] > $luvut[$s])

        {

          $temp = $luvut[$k];

          $luvut[$k] = $luvut[$s];

          $luvut[$s] = $temp;

        }
for ($k = 0; $k < count($luvut); $k++)
	print " " . $luvut[$k];
?>