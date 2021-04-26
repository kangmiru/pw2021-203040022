<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit;
}

require 'function.php';

// ambil id dari link
$id = $_GET['id'];

// query berdasarkan id
$p = query("SELECT * FROM survey_corps WHERE id = $id ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Detail Pasukan</h3>
    <ul>
        <li><img src="img/<?= $p['foto']; ?>" alt="" style="height:150px;"></li>
        <li>ID : <?= $p['id'];?></li>
        <li>Nama : <?= $p['nama'];?></li>
        <li>Email : <?= $p['email'];?></li>
        <li>Pangkat : <?= $p['pangkat'];?></li>
        <li><a href="ubah.php?id=<?= $p['id'];?>">ubah</a> | <a href="hapus.php?id=<?= $p['id'];?>" onclick="return confirm('apakah anda yakin?');">hapus</a></li>
        <li><a href="index.php">kembali kedaftar mahasiswa</a></li>
    </ul>
</body>
</html>