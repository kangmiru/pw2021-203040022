<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit;
}

require 'function.php';

if (isset($_POST['tambah']) > 0) {
    if (tambah($_POST)) {
        echo "<script>
                alert('data berhasil ditambahkan');
                document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                alert('data gagal ditambahkan');
                </script>";
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Tambah Data</title>
  </head>
  <body>
    <h3>Silakan Tambah Data</h3>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="gambar" required>Gambar : </label><br>
                <input type="file" name="gambar" class="gambar" onchange="previewImage()">
                <img src="../assets/img/no-image.jpg" width="120" style="display: block;" class="img-preview">
            </li>
            <li>
                <label for="nama" autofocus autocomplete="off" required>Nama : </label><br>
                <input type="text" name="nama">
            </li>
            <li>
                <label for="harga" required>Harga : </label><br>
                <input type="text" name="harga">
            </li>
            <li>
                <label for="deskripsi" required>Deskripsi : </label><br>
                <input type="text" name="deskripsi">
            </li>
            <li>
                <label for="tipe" required>Tipe : </label><br>
                <input type="text" name="tipe">
            </li>
            <br><br>
            <button type="submit" name="tambah">Tambah Data</button>
            <br><br>
            <a href="admin.php">Kembali</a>
            
        </ul>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
    <script src="../js/script.js"></script>
  </body>
</html>