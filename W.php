<?php
$sql = "SELECT weight FROM saw_criterias ORDER BY id_criteria";
$result = $db->query($sql);

$W_raw = array();
$sum_W = 0;

// Ambil bobot mentah dari database dan hitung totalnya
while ($row = $result->fetch_object()) {
    $W_raw[] = $row->weight;
    $sum_W += $row->weight; // Menjumlahkan (5+5+5+5+5 = 25)
}

$W = array();
// Normalisasi bobot: Bobot Kriteria / Total Bobot
foreach ($W_raw as $w) {
    $W[] = $w / $sum_W; // Hasilnya akan menjadi 0.2
}
?>