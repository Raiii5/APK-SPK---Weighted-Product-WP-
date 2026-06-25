<!DOCTYPE html>
<html lang="en">
  <?php
require "layout/head.php";
require "include/conn.php";
require "W.php";
require "R.php";
?>

  <body>
    <div id="app">
      <?php require "layout/sidebar.php";?>
      <div id="main">
        <header class="mb-3">
          <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
          </a>
        </header>
        <div class="page-heading">
          <h3>Nilai Preferensi Akhir (Vektor V) - Metode WP</h3>
        </div>
        <div class="page-content">
          <section class="row">
            <div class="col-12">
              <div class="card">

                <div class="card-header">
                  <h4 class="card-title">Tabel Hasil Perankingan WP</h4>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <p class="card-text">
                    Nilai preferensi (V) diperoleh dengan membagi nilai Vektor S setiap alternatif dengan total keseluruhan Vektor S. Nilai tertinggi merupakan alternatif terbaik.
                    </p>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-striped mb-0">
                    <caption>
    Nilai Preferensi (V)
  </caption>
  <tr>
    <th>No</th>
    <th>Alternatif</th>
    <th>Nilai Vektor S</th>
    <th>Nilai Akhir (V)</th>
  </tr>
  <?php

$S = array();
$sum_S = 0;
$m = count($W);

// TAHAP 1: Menghitung Vektor S dan Total Vektor S
foreach ($R as $i => $r) {
    $S[$i] = 1; // Inisialisasi angka 1 untuk operasi perkalian
    for ($j = 0; $j < $m; $j++) {
        // Karena semua atribut benefit, pangkat bernilai positif
        $S[$i] = $S[$i] * pow($r[$j], $W[$j]); 
    }
    $sum_S += $S[$i]; // Menjumlahkan semua Vektor S
}

// TAHAP 2: Menghitung Vektor V dan Menampilkannya
$V = array();
$no = 0;
foreach ($S as $i => $s_value) {
    // Vektor V = Vektor S alternatif dibagi Total Vektor S
    $V[$i] = $s_value / $sum_S; 
    
    echo "<tr class='center'>
            <td>" . (++$no) . "</td>
            <td>A{$i}</td>
            <td>" . round($s_value, 4) . "</td>
            <td><strong>" . round($V[$i], 4) . "</strong></td>
          </tr>";
}
?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <?php require "layout/footer.php";?>
      </div>
    </div>
    <?php require "layout/js.php";?>
  </body>
</html>