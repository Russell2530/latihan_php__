<?php

$daftar = [
    ["Nama" => "Denis", "Nilai" => 85],
    ["Nama" => "Aksa", "Nilai" => 60], 
    ["Nama" => "Rangga", "Nilai" => 45],
    ["Nama" => "Bima", "Nilai" => 72],
    ["Nama" => "Aoddi", "Nilai" => 50]
];

echo '<table border="1" cellpadding="5" cellspacing="0">';
echo "<tr><th>Nama</th><th>Nilai</th><th>Status</th></tr>";

foreach ($daftar as $siswa){
    echo "<tr>";
    echo "<td>" . $siswa ['Nama']. "</td>";
    echo "<td>" .$siswa ['Nilai']. "</td>";

    if ($siswa['Nilai'] >= 70) {
        $status = "<span style='color:green;'>Lulus</span>";
    } elseif ($siswa['Nilai'] >= 50) {
        $status = "<span style='color:orange;'>Remedial</span>";
    } else {
        $status = "<span style='color:red;'>Tidak Lulus</span>";
    }

    echo "<td> $status </td>";
}
echo "</table>";



