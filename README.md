# Richie Pranata
# 312410451
# TI.24.A.5
### Pratikum7

## 📚 Implementasi Dasar PHP: Penanganan Superglobal dan Validasi Input
Proyek singkat ini menyajikan implementasi dasar bahasa pemrograman PHP (Hypertext Preprocessor) dengan penekanan pada praktik terbaik dalam menangani input pengguna. Tujuan utama dari proyek ini adalah mendemonstrasikan bagaimana mengintegrasikan HTML dan PHP, serta cara memvalidasi keberadaan variabel superglobal secara efisien untuk menghindari runtime error.
## 🎯 Fokus Utama Pembelajaran
Struktur dan Sintaks PHP Dasar: Menampilkan output teks dan variabel ($nim, $nama) menggunakan fungsi echo.

Mekanisme Transfer Data: Memahami dan mengimplementasikan dua metode transfer data utama pada aplikasi web:

Metode POST: Digunakan untuk transfer data form (seperti input nama) dengan keamanan dan privasi yang lebih baik.

Metode GET: Digunakan untuk mengambil data dari query string pada URL.

Validasi Eksistensi Variabel: Menerapkan fungsi kondisional isset() sebelum mengakses variabel superglobal ($_POST dan $_GET). Praktik ini krusial untuk mencegah Notice atau Warning seperti Undefined index ketika halaman diakses sebelum data dikirimkan, memastikan stabilitas dan kualitas kode aplikasi.

## 📁 Struktur Proyek
Proyek ini terkandung dalam satu file, dirancang untuk demonstrasi fungsionalitas:

dasar_aman.php: File utama yang menggabungkan struktur HTML dengan logika PHP. Semua error handling untuk variabel $_POST dan $_GET terintegrasi di sini.

## ⚙️ Petunjuk Eksekusi Kode
Untuk menjalankan demonstrasi ini, diperlukan lingkungan server lokal (misalnya XAMPP, Laragon, WAMP) yang mendukung eksekusi PHP.

Penempatan File: Simpan file dasar_aman.php dalam direktori web root server lokal (e.g., folder htdocs).

Akses: Buka peramban (browser) dan akses file melalui URL: http://localhost/dasar_aman.php

## ✨ Kesimpulan Implementasi
Implementasi if (isset(...)) dalam kode berfungsi sebagai mekanisme pengamanan (guard clause), yang merupakan fondasi penting dalam pengembangan perangkat lunak yang tangguh dan terhindar dari bug level dasar. Hal ini mencerminkan pemahaman terhadap alur hidup variabel dalam eksekusi skrip PHP.
