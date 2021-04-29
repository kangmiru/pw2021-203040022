<?php
require 'function.php';

$barang = query("SELECT * FROM barang");

if (isset($_POST['cari'])) {
  $pasukan = cari($_POST['keyword']);
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
    <link rel="stylesheet" href="../css/admin.css">

    <style>
        img {
            height: 150px;
        }
    </style>

    <title>TUBES PW</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Fashion Kit</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Keranjang</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            tipe
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Sepatu</a></li>
            <li><a class="dropdown-item" href="#">Baju</a></li>
            <li><a class="dropdown-item" href="#">Celana</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Lainnya</a></li>
          </ul>
        </li>
        <ul class="navbar-nav mr-3">
            <a href="../index.php"><button class="logout">Logout</button></a>
        </ul>
        
    </div>
  </div>
</nav>

<form action="" method="post" class="cari">
    <input type="text" name="keyword" size="40" placeholder="masukan keyword pencarian..." autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari!</button>
</form>
<br><br>

<div>
  <a href="tambah.php"><button class="tambah">Tambah data disini!!</button></a>
</div>

<div class="container">
    <table class="table" border = 1 cellpadding = "10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Deskripsi</th>
            <th>Tipe</th>
        </tr>

        <?php if(empty($barang)):?>
            <tr>
                <td colspan="4"><p style="color:red; font-style:italic;">data anggota tidak ditemukan!</p></td>
            </tr>
        <?php endif;?>
        
        <?php $i =1; ?>
        <?php foreach($barang as $b): ?>

        <tr>
            <td><?= $i++ ;?></td>
            <td>
              <a href="hapus.php?id=<?= $b['id'] ;?>" onclick="return comfirm('apakah anda yakin??;')"><button class="hapus">Hapus</button></a>
              <a href="ubah.php?id=<?= $b['id'] ;?>"><button class="ubah">Ubah</button></a>
            </td>
            <td><img src="../assets/img/<?= $b['gambar'] ;?>" alt=""></td>
            <td><?= $b['nama'] ;?></td>
            <td><?= $b['harga'];?></td>
            <td><?= $b['deskripsi'];?></td>
            <td><?= $b['tipe'];?></td>
        </tr>

        <?php endforeach;?>
    </table>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>