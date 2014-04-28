<?
	include "Asiakasluokka.php";

	class Asiakaslista

	{
	
		var $asiakkaat;
		
		//muodostin
		
		function __consturct()
		{
			$asiakkaat = array();
			
		}
		
		function laitaAsiakas($as)
		{
			$this->asiakkaat[] = $cs;
		
		}
		
		function tulostaAsiakas()
		{
			$n = count ($this->asiakkaat);
			for ($k = 0; $k < $n; $k++)
			{
				print $this->asiakkaat[$k] -> palautaNimi() . "<br>";
			}
		
		}
		
		function palautaAsiakas($i)
		{
			$x = this->asiakkaat[$i];
			return $x;
			
		}
		
		//TEST
		$cs1 = new Asiakas();
		$cs2 = new Asiakas();
		$cs3 = new Asiakas();
		
		$cs1 -> laitaAsiakas("Kalle");
		$cs2 -> laitaAsiakas("Markus");
		$cs3 -> laitaAsiakas("Paavo");
		
		$cl	= Asiakaslista();
		$cl -> laitaAsiakas($cs1);
		$cl -> laitaAsiakas($cs1);
		$cl -> laitaAsiakas($cs1);
		
		$cl ->tulostaAsiakas();

	}


?>