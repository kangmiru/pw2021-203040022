<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- my css -->
    <link rel="stylesheet" href="portofolio/css/style.css">

    <style>
a{
  color: black;
  font-style:none;
}

a:hover{
  color:black;
}

     .menu {
       height: 800px;
    display: flex;
    flex-wrap: wrap;
    background-color:silver;
      
}

.flip-box {
    background-color: transparent;
    width: 25%;
    height: 200px;
    border: 1px solid whitesmoke;
    perspective: 1000px;
    margin-top:200px;
    margin-left:250px;
    border-radius:100%;
}

.flip-box-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.8s;
    transform-style: preserve-3d;
    border-radius:100%;
}

.flip-box:hover .flip-box-inner {
    transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back {
    position: absolute;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    border-radius:100%;
}

.flip-box-front {
  background-color: grey;
  color: black;
  border-radius:100%;
}

.flip-box-back {
  background-color: silver;
  color: black;
  transform: rotateY(180deg);
  border-radius:100%;
}

.flip-box h2{
    line-height: 200px;
}

.judul{
  text-align: center;
}
    </style>


    <title>Hafadz Hazmirullah</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">203040022</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <div class="judul">
    <h1>SELAMAT DATANG</h1>
    <p>Silakan Pilih Menu</p>
  </div>

  <section class="menu" id="menu">
      <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front">
            <a href="kuliah"><h2>Kuliah</h2></a>
          </div>
          <div class="flip-box-back">
          <a href="kuliah"><h2>Kuliah</h2></a>
          </div>
        </div>
      </div>
      <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front">
            <a href="praktikum"><h2>Praktikum</h2></a>
          </div>
          <div class="flip-box-back">
          <a href="praktikum"><h2>Praktikum</h2></a>
          </div>
        </div>
      </div>
      <div class="flip-box">
        <div class="flip-box-inner">
          <div class="flip-box-front">
            <a href="tubes/index.php"><h2>Tubes</h2></a>
          </div>
          <div class="flip-box-back">
          <a href="tubes"><h2>Tubes</h2></a>
          </div>
        </div>
      </div>
    </section>















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- my script -->
    

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>