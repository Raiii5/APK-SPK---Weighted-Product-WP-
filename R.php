<?php
// Murni hanya mengambil nilai matriks (rating) dari database tanpa pembagian max/min
$sql = "SELECT
          a.id_alternative,
          SUM(IF(a.id_criteria=1,a.value,0)) AS C1,
          SUM(IF(a.id_criteria=2,a.value,0)) AS C2,
          SUM(IF(a.id_criteria=3,a.value,0)) AS C3,
          SUM(IF(a.id_criteria=4,a.value,0)) AS C4,
          SUM(IF(a.id_criteria=5,a.value,0)) AS C5
        FROM
          saw_evaluations a
        GROUP BY a.id_alternative
        ORDER BY a.id_alternative";

$result = $db->query($sql);

$R = array(); // Kita tetap menamai array ini $R agar file lain tidak error
while ($row = $result->fetch_object()) {
    // Memasukkan angka mentah ke dalam array
    // Urutan index array [0, 1, 2, 3, 4] mewakili [C1, C2, C3, C4, C5]
    $R[$row->id_alternative] = array($row->C1, $row->C2, $row->C3, $row->C4, $row->C5);
}
$result->free();
?>