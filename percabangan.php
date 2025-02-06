<?php
$total_belanja = 500;

// jika belanja lebih dari 1000, maka selamat anda mendapatkan diskon 500
// selainya anda : tidak dapat diskon

echo "Total belanja anda $total_belanja <br>";

if($total_belanja >= 1000) {
    echo "Selamat anda mendapatkan diskon Rp. 500";
} else {
    echo "Anda tidak mendapat diskon";
}

//=================================================================================
// senin : putih abu
// selasa : pramuka
// rabu : produktif
// kamis : batik
// jumat : gamis

$hari = "sabtu";
if ($hari == "senin") {
    echo "Mengenakan Seragam Putih Abu";
} else if($hari == "selasa") {
    echo "Mengenakan Seragam Pramuka";
} else if($hari == "rabu") {
    echo "Mengenakan Seragam Produktif";
} else if($hari == "kamis") {
    echo "Mengenakan Seragam Batik";
} else if($hari == "jumat") {
    echo "Mengenakan Seragam Gamis";
}