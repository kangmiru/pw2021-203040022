<?php
require 'function.php';

$pasukan = query("SELECT * FROM survey_corps");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        img {
            height: 150px;;
        }
    </style>
    <title>Daftar Pasukan</title>
</head>
<body>
    <h3>Daftar Pasukan</h3>

    <a href="tambah.php">Tambah Data Pasukan</a>
    <br><br>

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>#</th>
            <th>gambar</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        <?php $i =1; ?>
        <?php foreach($pasukan as $p): ?>
        <tr>
            <td><?= $i++;?></td>
            <td><img src="img/<?= $p['foto']; ?>" alt=""></td>
            <td><?= $p['nama']; ?></td>
            <td>
                <a href="detail.php?id=<?= $p['id']; ?>">lihat detail</a>
            </td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>