<?php
class mobil {
	var $pemilik;
	var $merk;
	var $harga;

	function nyalakan_mobil(){
		return "Nyalakan Mobil";
	}
	function matikan_mobil(){
		return "Matikan Mobil";
	}

}
$mobil_rio = new mobil();

$mobil_rio->pemilik="Rio";
$mobil_rio->merk="Avanza";
$mobil_rio->harga="5000000";

echo $mobil_rio->pemilik;
echo "<br />";
echo $mobil_rio->merk;
echo "<br />";
echo $mobil_rio->harga;
echo "<br />";

echo $mobil_rio->nyalakan_mobil();
echo "<br />";
echo $mobil_rio->matikan_mobil();
echo "<br />";
?>