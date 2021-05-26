<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: login.php');
    exit;
}

require 'function.php';

$pasukan = query("SELECT * FROM survey_corps");

// ketika tombol cari di klik
if (isset($_POST['cari'])) {
    $pasukan = cari($_POST['keyword']);
}
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
    <a href="logout.php">logout</a>
    <h3>Daftar Pasukan</h3>

    <a href="tambah.php">Tambah Data Pasukan</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" placeholder="masukan keyword pencarian..." autocomplete="off" autofocus class="keyword">
        <button type="submit" name="cari" class="tombol-cari" style="display:none;">Cari!</button>
    </form>
    <br><br>

<div class="container">
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        
        <?php if(empty($pasukan)):?>
            <tr>
                <td colspan="4"><p style="color:red; font-style:italic;">data anggota tidak ditemukan!</p></td>
            </tr>
        <?php endif;?>
        
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
</div>

<script src="js/script.js"></script>

</body>
</html>