<?php
//Jualan produk
//komik
//game

class Produk {
         public $judul,
                $penulis,
                $penerbit,
                $harga;

                public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
                 $this->judul = $judul;
                 $this->penulis = $penulis;
                 $this->penerbit = $penerbit;
                $this->harga = $harga;
                }

                 public function getLablel() {
                    return "$this->penulis, $this->penerbit";
                 }

}


$produk1 = new Produk("Naruto", "Masashi", "Shonen jump", 50.000);
$produk2 = new Produk("Atomic", "Mas Rudi","Gramedia",1.000);
$produk3 = new Produk("Dragon BALL");

echo "Komik:" . $produk1->getLablel();
echo"<br>";
echo "Game:" . $produk2->getLablel();
echo"<br>";
var_dump($produk3);

