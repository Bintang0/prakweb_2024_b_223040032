<?php
//Jualan produk
//komik
//game

class Produk {
         public $judul = "judul",
                $penulis = "penulis",
                $penerbit = "penerbit",
                $harga = 0;

                 public function getLablel() {
                    return "$this->penulis, $this->penerbit";
                 }

}


$produk3 = new Produk();
$produk3->judul= "Naruto";
$produk3->penulis= "Masashi";
$produk3->penerbit= "Shonen jump";
$produk3->harga= "50.000";

$produk4 = new Produk();
$produk4->judul= "Atomic ";
$produk4->penulis= "Mas Rudi";
$produk4->penerbit= "Gramedia";
$produk4->harga= "1.000";

echo "Komik:" . $produk3->getLablel();
echo"<br>";
echo "Game:" . $produk4->getLablel();

