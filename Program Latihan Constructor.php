<?php
class Toko{
  public $namaBarang, 
        $merk, 
        $harga;
            // membuat method
            public function cetakProduk(){
                return "$this->namaBarang, $this->merk, $this->harga";
            }
            public function __construct($namaBarang = "Nama Barang", $merk = "Merk", $harga = "0"){
                $this->namaBarang = $namaBarang;
                $this->merk = $merk;
                $this->harga = $harga;
            }
}

$barang1 = new Toko("Macbook Pro" , "Apple", 30000000);
$barang2 = new Toko("Iphone 11 Pro Max", "Apple", 23000000);


echo "Nama Barang : " . $barang1->cetakProduk();
echo "<br>";
echo "Nama Barang : " . $barang2->cetakProduk();

?>