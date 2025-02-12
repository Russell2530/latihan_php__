<?php

$uts = 75;
$uas = 85;
$tugas = 70;

$status = ""; //lulus ataau perbaikan
$grade = ""; // a, b, c

$rata = ($uts+$uas+$tugas) / 3;

if ($rata >= 70 && $rata <= 79) {
    $status = "Perbaikan";
    $grade = "C";
} else if($rata <= 80 && $rata <= 89) {
    $status = "Lulus";
    $grade = "B";
} else if ($rata >= 90 && $rata <= 100) {
    $status = "Lulus";
    $grade = "A";
} else {
    $status = "-";
    $grade = "-";
}

// menampilkan hasil

echo "Nilai UTS = " . $uts;
echo "<br> Nilai UAS = " . $uas;
echo "<br> Nilai TUGAS = " . $tugas;

echo "<br> Rata2 = " . $rata;
echo "<br> Grade = " . $grade;
echo "<br> Status = " . $status;
