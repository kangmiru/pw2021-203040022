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

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>#</th>
            <th>gambar</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Pangkat</th>
            <th>Aksi</th>
        </tr>
        <?php $i =1; ?>
        <?php foreach($pasukan as $p): ?>
        <tr>
            <td><?= $i++;?></td>
            <td><img src="img/<?= $p['foto']; ?>" alt=""></td>
            <td><?= $p['id']; ?></td>
            <td><?= $p['nama']; ?></td>
            <td><?= $p['email']; ?></td>
            <td><?= $p['pangkat']; ?></td>
            <td>
                <a href="">Ubah</a> | <a href="">Hapus</a>
            </td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>