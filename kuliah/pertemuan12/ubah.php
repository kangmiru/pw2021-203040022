<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit;
}

require 'function.php';

// jika tidak id di url
if (!isset($_GET['id'])) {
    header("location: index.php");
    exit;
}

// ambil id dari url
$id =$_GET['id'];

// cari data berdasarkan id
$p = query("SELECT * FROM survey_corps WHERE id = $id");

// cek tombol sudah ditekan atau belum
if (isset($_POST['ubah']) > 0) {
    if (ubah($_POST)) {
        echo "<script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
                </script>";
    } else {
        echo "<script>
                alert('data gagal diubah');
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
    <title>Ubah Data</title>
</head>
<body>
    <h3>Ubah Data</h3>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $p['id'];?>">
        <ul>                
            <li>
                <label for="nama">Nama : <input type="text" name="nama" autofocus required value="<?= $p['nama'];?>"></label>
            </li>
            <li>
                <label for="email">Email : <input type="text" name="email" required value="<?= $p['email'];?>"></label>
            </li>
            <li>
                <label for="pangkat">Pangkat : <input type="text" name="pangkat" required value="<?= $p['pangkat'];?>"></label>
            </li>
            <li>
                <label for="foto">Gambar : <input type="text" name="foto" required value="<?= $p['foto'];?>"></label>
            </li>
            <li>
                <button type="submit" name="ubah">Ubah</button>
            </li>
        </ul>
    </form>
</body>
</html>