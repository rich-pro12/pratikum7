<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Dasar & Form Aman</title>
<style>
    body { font-family: Arial, sans-serif; line-height: 1.6; padding: 20px; }
    h1, h2 { color: #333; }
    .section { border: 1px solid #ccc; padding: 15px; margin-bottom: 20px; border-radius: 5px; background-color: #f9f9f9; }
    .output { background-color: #e6e6fa; padding: 10px; border-left: 5px solid #6a5acd; }
    form { margin-top: 15px; }
</style>
</head>
<body>

<h1>Belajar PHP Dasar dan Penanganan Error</h1>

<div class="section">
    <h2>1. Output Dasar dan Variabel</h2>
    <div class="output">
        <?php
        // Output Teks Dasar
        echo "Hello World <br>";

        // Deklarasi Variabel
        $nim = "0411500400";
        $nama = 'Abdullah';

        echo "NIM : " . $nim . "<br>";
        echo "Nama : $nama";
        ?>
    </div>
</div>

<div class="section">
    <h2>2. Form Input ($_POST)</h2>

    <form method="post">
        <label for="nama_input">Nama: </label>
        <input type="text" name="agus_post" id="nama_input" placeholder="Masukkan nama Anda" required>
        <input type="submit" value="Kirim">
    </form>

    <div class="output">
        <?php
        // Perbaikan: Menggunakan isset() untuk mencegah 'Notice: Undefined index' 
        // saat halaman dimuat pertama kali sebelum form disubmit.
        if (isset($_POST['agus_post'])) {
            // Gunakan htmlspecialchars() untuk alasan keamanan (XSS)
            $nama_post = htmlspecialchars($_POST['agus_post']);
            echo 'Selamat Datang **' . $nama_post . '** (dari Form POST)';
        } else {
            echo 'Silakan isi form di atas dan tekan Kirim.';
        }
        ?>
    </div>
</div>

<div class="section">
    <h2>3. Variabel URL ($_GET)</h2>
    <p>Coba tambahkan <code>?agus_get=Budi</code> di akhir URL browser Anda.</p>
    <div class="output">
        <?php
        // Perbaikan: Menggunakan isset() untuk mencegah 'Notice: Undefined index' 
        // jika variabel 'agus_get' tidak ada di URL.
        if (isset($_GET['agus_get'])) {
            $nama_get = htmlspecialchars($_GET['agus_get']);
            echo 'Halo **' . $nama_get . '** (dari URL $_GET)';
        } else {
            echo 'Variabel GET (**agus_get**) tidak ditemukan di URL.';
        }
        ?>
    </div>
</div>

</body>
</html>