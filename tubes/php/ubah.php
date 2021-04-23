<?php
session_start();
if (isset($_SESSION['username'])) {
  header("location: login.php");
  exit;
}

require 'function.php';

$id = $_GET["id"];
$fs = query("SELECT * FROM fashion WHERE nomor = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0 ){
        echo "<script>
                alert ('data berhasil diubah');
                document.location.href = 'admin.php';
                </script>";
    }else {
        echo "<script>
                alert ('data gagal diubah');
                document.location.href = 'admin.php';
                </script>";
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah data</title>
</head>
<body>
<h3>ubah data disini</h3>
    <form action="" method="post">
        <ul>
            <li>
                <label for="img">Gambar</label><br>
                <input type="text" name="img" id="img" required value="<?= $fs['img'];?>"><br><br>
            </li>
            <li>
                <label for="nama">Nama</label><br>
                <input type="text" name="nama" id="nama" required value="<?= $fs['nama'];?>"><br><br>
            </li>
            <li>
                <label for="deskripsi">Deskripsi</label><br>
                <input type="text" name="deskripsi" id="deskripsi" required value="<?= $fs['deskripsi'];?>"><br><br>
            </li>
            <li>
                <label for="harga">Harga</label><br>
                <input type="text" name="harga" id="harga" required value="<?= $fs['harga'];?>"><br><br>
            </li>
            <li>
                <label for="kategori">Kategori</label><br>
                <select name="kategori" id="kategori" required value="<?= $fs['kategori'];?>">
                <option value="">.........pilih kategori.........</option>
                <option value="casual">casual</option>
                <option value="sport">sport</option>
                </select>
            </li>
            <input type="hidden" id="id" name="id" value="<?= $fs['nomor'];?>">
            <br>
            <button type="submit" name="ubah">ubah data!</button>
            <button type="submit"><a href="admin.php" style="text-decoration:none; color:black">kembali</a></button>
        </ul>
    </form>
</body>
</html>

