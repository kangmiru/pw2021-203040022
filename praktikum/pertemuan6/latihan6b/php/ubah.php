<?php
require 'function.php';

$id = $_GET["id"];
$fs = query("SELECT * FROM barang WHERE id = $id")[0];

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
                <label for="gambar">Gambar</label><br>
                <input type="text" name="gambar" id="gambar" required value="<?= $fs['gambar'];?>"><br><br>
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
                <label for="tipe">Kategori</label><br>
                <select name="tipe" id="tipe" required value="<?= $fs['tipe'];?>">
                <option value="">.........pilih kategori.........</option>
                <option value="casual">casual</option>
                <option value="sport">sport</option>
                </select>
            </li>
            <input type="hidden" id="id" name="id" value="<?= $fs['id'];?>">
            <br>
            <button type="submit" name="ubah">ubah data!</button>
            <button type="submit"><a href="admin.php" style="text-decoration:none; color:black">kembali</a></button>
        </ul>
    </form>
</body>
</html>

