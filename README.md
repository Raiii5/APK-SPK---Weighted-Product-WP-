# Sistem Pendukung Keputusan (SPK) - Metode Weighted Product (WP)

Aplikasi web Sistem Pendukung Keputusan (SPK) ini dikembangkan menggunakan metode **Weighted Product (WP)**. Dibangun menggunakan PHP dan MySQL, sistem ini dirancang untuk memproses dan meranking alternatif keputusan secara akurat.

## 📌 Deskripsi Metode
Metode *Weighted Product* (WP) adalah salah satu metode penyelesaian masalah *Multi-Criteria Decision Making* (MCDM). Metode ini mengevaluasi beberapa alternatif terhadap sekumpulan kriteria yang telah ditentukan. Berbeda dengan metode SAW yang mengandalkan penjumlahan linier, metode WP menggunakan **proses perpangkatan** untuk menghubungkan atribut *rating*, sehingga lebih presisi dalam menyeimbangkan perbandingan antar kriteria.

## 🚀 Langkah Penyelesaian WP dalam Sistem
1. **Penentuan Kriteria & Bobot:** Menetapkan kriteria dan bobot prioritas.
2. **Normalisasi Bobot:** Membagi nilai bobot setiap kriteria dengan total keseluruhan bobot agar total bobot menjadi 1 (Wj).
3. **Perhitungan Vektor S:** Mengalikan rating setiap alternatif yang telah dipangkatkan dengan bobot kriteria.
4. **Perhitungan Vektor V:** Membagi nilai Vektor S alternatif dengan total nilai Vektor S dari seluruh alternatif untuk mendapatkan hasil akhir (Perankingan).

## 🛠️ Teknologi yang Digunakan
- **Backend:** PHP (Native)
- **Database:** MySQL
- **Frontend:** HTML, CSS (Bootstrap), JavaScript

## 👨‍💻 Pengembang
- **Nama:** Anrai Harika Harpan
- **Instansi:** Universitas Pamulang
