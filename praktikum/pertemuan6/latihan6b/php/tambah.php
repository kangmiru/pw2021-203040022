<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
</head>
<body>
<h3>tambahkan data disini</h3>
    <form action="" method="post">
        <ul>
            <li>
                <label for="gambar">Gambar</label><br>
                <input type="text" name="gambar" id="gambar"><br><br>
            </li>
            <li>
                <label for="nama">Nama</label><br>
                <input type="text" name="nama" id="nama" required><br><br>
            </li>
            <li>
                <label for="deskripsi">Deskripsi</label><br>
                <input type="text" name="deskripsi" id="deskripsi" required><br><br>
            </li>
            <li>
                <label for="harga">Harga</label><br>
                <input type="text" name="harga" id="harga" required><br><br>
            </li>
            <li>
                <label for="tipe">Kategori</label><br>
                <select name="tipe" id="tipe" required>
                <option value="">.........pilih kategori.........</option>
                <option value="casual">casual</option>
                <option value="sport">sport</option>
                </select>
            </li>
            <br>
            <button type="submit" name="tambah">tambah data!</button>
            <button type="submit"><a href="admin.php" style="text-decoration:none; color:black">kembali</a></button>
        </ul>
    </form>
</body>
</html>
<?php
require 'function.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0){
        echo "<script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'admin.php';
                </script>";
    }else{
        echo "<script>
                alert('data gagal ditambahkan!');
                document.location.href = 'admin.php';
                </script>";
    }
}
?>