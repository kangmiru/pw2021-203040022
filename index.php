<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .background {
      background-image: url("bg.jpg");
      background-size: cover;
      height:700px;
    }
    .judul{
      text-align:center;
      padding-top: 200px;
      font-size:30px;
    }
    .pilih{
      width:343px;
      height: 95px;
      border:2px solid white;
      border-radius: 50px;
      color: white;
      display: inline-block;
      text-align: center;
      margin-left: 100px
    }
    a{
      text-decoration: none;
      line-height: 95px;
      font-size: 25px;
      color: white;
    }
    .pilih:hover{
      background-color:purple;
      opacity:0.4;
    }
  </style>
  
  <title>Menu</title>
</head>
<body>
  <!-- hero -->
  <div class="background">
    <div class="judul">
      <h1>Welcome to My Website</h1>
      <h2> Select Your Site</h2>
    </div>
    <div class="pilih">
      <a href="kuliah">Kuliah</a>
    </div>
    <div class="pilih">
      <a href="praktikum">Praktikum</a>
    </div>
    <div class="pilih">
      <a href="tubes">Tubes</a>
    </div>
  </div>
</body>
</html>