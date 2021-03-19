<?php
    $sepatu = [
        [
            "gambar" => "adaptbb20.jpg" ,
            "nama" => "Adapt BB 2.0",
            "deskripsi" => "Sepatu olahraga yang nyaman digunakan, tersedia dari ukuran 38-45",
            "harga" => "Rp. 9.000.000,00",
            "kategori" => "Sport"
        ],
        [
            "gambar" => "embos.jfif" ,
            "nama" => "Embos",
            "deskripsi" => "Sepatu yang membuat anda menjadi lebih keren 5x lipat",
            "harga" => "Rp. 1.800.000,00",
            "kategori" => "Casual"
        ],
        [
            "gambar" => "huarache.jpg" ,
            "nama" => "Huarache",
            "deskripsi" => "Sepatu casual yang nyaman diguanakan untuk kegiatan sehari-hari",
            "harga" => "Rp. 430.000,00",
            "kategori" => "Casual"
        ],
        [
            "gambar" => "kanky.jpg" ,
            "nama" => "Kanky",
            "deskripsi" => "Sepatu yang cocok untuk pergi kesekolah dan untuk main",
            "harga" => "Rp. 350.000,00",
            "kategori" => "Casual"
        ],
        [
            "gambar" => "leedoo.png" ,
            "nama" => "Leedoo",
            "deskripsi" => "Tersedia dalam ukuran 38-46, mendapat gratis sepasang kaos kaki",
            "harga" => "Rp. 203.000,00",
            "kategori" => "Casual"
        ],
        [
            "gambar" => "meow.jfif" ,
            "nama" => "Meow",
            "deskripsi" => "Sepatu wanita lucu dan murah",
            "harga" => "Rp. 26.000,00",
            "kategori" => "Casual"
        ],
        [
            "gambar" => "nikeyesus.jpg" ,
            "nama" => "Nike Yesus",
            "deskripsi" => "Produk baru nike segra beli produk terbatas",
            "harga" => "Rp. 42.000.000,00",
            "kategori" => "Sport"
        ],
        [
            "gambar" => "satohama.jpg" ,
            "nama" => "Satohama",
            "deskripsi" => "Sepatu casual yang membuat anda menjadi tampan dan berani",
            "harga" => "Rp. 800.000,00",
            "kategori" => "Casual"
        ],
        [
            "gambar" => "sneaker_H2252.jfif" ,
            "nama" => "Sneaker H 2252",
            "deskripsi" => "Sepatu untuk jalan-jalan santai",
            "harga" => "Rp. 1.700.000,00",
            "kategori" => "Casual"
        ],
        [
            "gambar" => "ziggman.jpg" ,
            "nama" => "Ziggman",
            "deskripsi" => "Sepatu lari murah warna merah dan hitam",
            "harga" => "Rp. 65.000,00",
            "kategori" => "Sport"
        ]
    ]
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
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
      .table {
          margin-top: 50px;
      }
      tbody {
          background-color: lightgray;
      }
      thead {
          background-color: darkviolet;
          color: white;
      }
    </style>
    
    <title>latihan 3e</title>
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

<table class="table" border = 1 cellpadding = "10" celspacing = "0">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Harga</th>
      <th scope="col">Kategori</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($sepatu as $no => $s): ?>
    <tr>
      <td><?=$no+1;?></td>
      <td><img src="img/<?= $s["gambar"];?>" alt=""></td>
      <td><?= $s["nama"];?></td>
      <td><?= $s["deskripsi"];?></td>
      <td><?= $s["harga"];?></td>
      <td><button><?= $s["kategori"];?></button></td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>



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