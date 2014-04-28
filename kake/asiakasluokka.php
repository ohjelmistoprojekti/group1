<?
	class Asiakas
	{
		var $nimi;
		
		function asetaNimi ($n)
		{
			$this->nimi = $n;
		}
		
		function palautaNimi()
		{
			return $this->nimi;
		}
	}
	
	$as1 = new Asiakas();
	$as1->asetaNimi("Kalle");
	print $as1->palautaNimi();
	
?>