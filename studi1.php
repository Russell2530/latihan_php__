<?php
 
 $gaji = 13000000;
 $status = "kontrak";
 

 if ($gaji >= 15000000) {
    $pajak = 20;
} else if($gaji >= 10000000 && $gaji <= 15000000) {
    $pajak = 15;
} else if ($gaji >= 5000000 && $gaji <= 10000000) {
    $pajak = 10;
} else if ($gaji < 5000000 ) {
    $pajak = 5;
}

if ($status == "tetap") {
    $pajak = $pajak + 5 ;
} else {
    $pajak = $pajak + 0 ;
}

$persenan = $pajak / 100;
$potongan = $gaji * $persenan;
$gaji_bersih = $gaji - $potongan; 

echo "Gaji Bulanan = " . $gaji ."<br>";
echo "Status = " . $status ."<br>";
echo "Pajak = " . $pajak ."%<br>";
echo "Potongan Pajak = Rp." . $potongan ."<br>";
echo "Gaji Bersih = Rp. " . $gaji_bersih ."<br>";
