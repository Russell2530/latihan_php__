<?php

$jabatan = 2;
$jam = 300;

if ($jabatan == 1) {
    $jabatan = "Manager";
    $gaji = 7000000;
} elseif ($jabatan == 2) {
    $jabatan = "Supervisor";
    $gaji = 5000000;
} elseif ($jabatan == 3) {
    $jabatan = "Staff";
    $gaji = 3000000;
}

if ($gaji >= 3000000) {
    $pajak = 5;
} else if( $gaji <= 5000000) {
    $pajak = 10;
} else if ($gaji > 5000000 ) {
    $pajak = 15;
}

$jam_bonus = $jam - 200;

if ($jam > 200) {
    $bonus = $jam_bonus * 20000;
    $ucapan = "Selamat jam kerja anda melebihi 200 jam";
} else {
    $bonus = 0;
    $ucapan = "Maaf jam anda kurang dari 200";
}

$persenan = $pajak/100;
$total_pajak = $gaji * $persenan;;
$gaji_bersih = $gaji - $total_pajak + $bonus;

function rupiah($angka) {
    $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
    return $hasil_rupiah;
}

;
echo "Jabatan : $jabatan <br>";
echo "Gaji Pokok : " . rupiah ($gaji). "<br>";
echo "Pajak : " . $pajak ."%<br>";
echo "Total Pajak : " . rupiah ($total_pajak). "<br>";
echo "Bonus : " . rupiah ($bonus). "<br>";
echo $ucapan . "<br>";
echo "Gaji Bersih : " . rupiah ($gaji_bersih). "<br>";
