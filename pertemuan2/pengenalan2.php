<?php

// memhuat variabel
$nama = "rapaka";
$umur = "1 abad";
$alamat = "Zimbabwe";
$anak_ke = "1";

// mencetak data

echo "daftar nama di pesat salah satunya : " . $nama ."<br>";
echo "umur : " . $umur ."<br>";
echo "alamat : " . $alamat ."<br>";
echo "anak ke : " . $anak_ke ."<br>";

// operasi bilangan

$bil1 = "10";
$bil2 = "12";
$bil3 = "5";
$bil4 = "2";

$Hasil_penjumlahan = $bil1 + $bil2 + $bil3 + $bil4;
$Hasil_pengurangan = $bil1 - $bil2 - $bil3 - $bil4;
$Hasil_perkalian = $bil1 * $bil2 * $bil3 * $bil4;
$Hasil_pembagian = $bil1 / $bil2 / $bil3 / $bil4;
$Hasil_persen = $bil1 % $bil2 % $bil3 % $bil4;
$Hasil_pangkat = $bil1 ** $bil2 ** $bil3 ** $bil4;
$Hasil_pangkat2 = $bil1 ** $bil4;

echo "<br> Hasil Penjumlahan : $bil1 + $bil2 + $bil3 + $bil4 = " . $Hasil_penjumlahan;
echo "<br> Hasil Pengurangan : $bil1 - $bil2 - $bil3 - $bil4 = " . $Hasil_pengurangan;
echo "<br> Hasil Perkalian : $bil1 * $bil2 * $bil3 * $bil4 = " . $Hasil_perkalian;
echo "<br> Hasil Pembagian : $bil1 / $bil2 / $bil3 / $bil4 = " . $Hasil_pembagian;
echo "<br> Hasil Persen : $bil1 % $bil2 % $bil3 % $bil4 = " . $Hasil_persen;
echo "<br> Hasil Pangkat : $bil1 ** $bil4 = " . $Hasil_pangkat2;

