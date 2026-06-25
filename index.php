<!DOCTYPE html>
<html lang="en">
    <?php require "layout/head.php";?>

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
                    <h3>Dashboard</h3>
                </div>
                <div class="page-content">
                    <section class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
    <h4 class="card-title">Sistem Pendukung Keputusan (Weighted Product)</h4>
</div>
<div class="card-body">
    <p>
        Metode <em>Weighted Product</em> (WP) adalah salah satu metode penyelesaian masalah <em>Multi-Criteria Decision Making</em> (MCDM) yang menggunakan teknik perkalian untuk menghubungkan atribut rating. 
        Berbeda dengan metode SAW yang mengandalkan penjumlahan linier, metode WP menggunakan proses perpangkatan dalam perhitungannya. Hal ini membuat WP lebih unggul dalam menyeimbangkan perbandingan antara kriteria yang memiliki kepentingan berbeda.
    </p>
    <p>
        Sistem ini bekerja melalui beberapa tahapan sistematis untuk memastikan hasil perankingan yang akurat:
    </p>
    <ol>
    <li><strong>Penentuan Kriteria & Bobot:</strong> Menetapkan kriteria dan memberikan nilai bobot pada tiap kriteria sesuai dengan tingkat kepentingannya.</li>
    <li><strong>Normalisasi Bobot:</strong> Membagi nilai bobot setiap kriteria dengan total keseluruhan bobot kriteria. Proses ini memastikan agar total bobot berjumlah 1, yang merupakan syarat mutlak agar perhitungan metode WP akurat.</li>
    <li><strong>Perhitungan Vektor S:</strong> Menghitung nilai Vektor S dengan mengalikan rating setiap alternatif yang telah dipangkatkan dengan bobot kriteria masing-masing.</li>
    <li><strong>Perhitungan Vektor V:</strong> Menghitung nilai akhir (Vektor V) dengan membagi nilai Vektor S suatu alternatif dengan total nilai Vektor S dari seluruh alternatif, sehingga diperoleh hasil perankingan yang siap digunakan.</li>
</ol>
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