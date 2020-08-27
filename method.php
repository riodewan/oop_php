<?php
class produk{
	public $namaBarang="Laptop",
			$merk="Lenovo",
			$harga=7000000;
			//method
			public function cetakproduk(){
				return "Produknya adalah...";
			}
			public function cetakproduk2(){
				return "$this->namaBarang, $this->merk, $this->harga";
			}

		}
		$produk1 = new produk();
		$produk2 = new produk(); 	
		$produk2->namaBarang="Mouse";
		$produk2->merk="Logitec";
		$produk2->harga="100000";
		
			var_dump($produk1);
			echo "<br>";
			var_dump($produk2);
			echo "<br>";
			echo $produk1->cetakproduk();
			echo "<br>";
			echo $produk2->cetakproduk2();
			?>