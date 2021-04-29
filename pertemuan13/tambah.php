<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit;
}

require 'function.php';

// cek tombol sudah ditekan atau belum
if (isset($_POST['tambah']) > 0) {
    if (tambah($_POST)) {
        echo "<script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
                </script>";
    } else {
        echo "<script>
                alert('data gagal ditambahkan');
                </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h3>Tambah Data</h3>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">Nama : <input type="text" name="nama" autofocus required></label>
            </li>
            <li>
                <label for="email">Email : <input type="text" name="email" required></label>
            </li>
            <li>
                <label for="pangkat">Pangkat : <input type="text" name="pangkat" required></label>
            </li>
            <li>
                <label for="foto">Gambar : <input type="file" name="foto" class="foto" onchage="previewImage()"></label>
                <img src="img/no-image.jpg" width="120" style="display: block;" class="img-preview">
            </li>
            <li>
                <button type="submit" name="tambah">Tambah</button>
            </li>
        </ul>
    </form>
    
    <script src="js/script.js"></script>
</body>
</html>