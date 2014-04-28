<?
print "<br> fuktio esimerkki <br>";
function oma1()
	{
		print "fuktiossa ollaan";
	}
function oma2($a)
	{
		print "tulostan" . $a;
	}
function sumCalc($a, $b)
	{
		$c = $a+$b;

		return $c;
	}
	//funktion kutsu
	print "taidampa kutsua funktiota <br>";
	oma1();
	oma2("kake on mies");
	print sumCalc(2, 5);
?>