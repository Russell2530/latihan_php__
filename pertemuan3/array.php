<?php

echo "<h1>Nama</h1>";
$nama = ["ucup", "midi", "heri"];
echo $nama [0] . "<br>";
echo $nama [1] . "<br>";
echo $nama [2] . "<br>";

// array asosiatif
$buah = [
    "nama" => "saya",
    "warna" => "sesuai hari",
    "rasa" => "manis",
];

echo "<hr>";
echo "<h1>Nama Saya</h1>";
echo "nama = " .$buah['nama'] . "<br>";
echo "warna = " .$buah['warna'] . "<br>";
echo "rasa = " .$buah['rasa'] . "<br>";



$produk = [
    ["nama" => "kamu", "harga" => 7000000, "stok" => 10],
    ["nama" => "aku", "harga" => 10000000, "stok" => 5],
    ["nama" => "kita", "harga" => 15000000, "stok" => 4]
];

echo "<hr>";
echo "<h1>Daftar Produk</h1>";
foreach ($produk as $p){
    echo "Nama Produk = " . $p['nama'] . 
          ", Harga Rp = " . number_format ($p['harga'],0,",",".") .
          ", Stok = " . $p['stok'] . "<br> <hr>";
}