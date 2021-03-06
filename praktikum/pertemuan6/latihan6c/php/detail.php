<?php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'function.php';

    $id = $_GET['id'];

    $barang = query("SELECT * FROM barang WHERE id = $id")[0];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/detail.css">
    <style>
      .btn {
          background-color: red;
      }
      .btn:hover {
          background-color: firebrick;
      }
      .navbar-nav {
          margin-left: 490px;
      }
      body {
          background-color: midnightblue;
      }
      button {
          background-color: royalblue;
      }
      img {
          height: 250px;
          width: auto;
      }
      .kembali {
        background-color: white;
      }
      .container {
        background-color:lightgray;
      }
    </style>
    <title>latihan 4c</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SuperShoes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Produk</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Type
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Casual</a></li>
            <li><a class="dropdown-item" href="#">Sport</a></li>
            <li><a class="dropdown-item" href="#">Formal</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Keranjang</a>
        </li>
      </ul>
      <ul class="navbar-nav mr-3">
        <button class="btn">Log In</button>
      </ul>
    </div>
  </div>
</nav>

    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $barang["gambar"];?>" alt="">
        </div>
        <div class="keterangan">
            <ul>
                <li><?= $barang["nama"];?></li>
                <li><?= $barang["deskripsi"];?></li>
                <li><?= $barang["harga"];?></li>
                <li><?= $barang["tipe"];?></li>
            </ul>
        </div>

        <button class="kembali"><a href="../index.php">Kembali</a></button>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>