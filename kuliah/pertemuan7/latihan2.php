<?php
    if (!isset($_GET["nama"]) || 
    !isset($_GET["nrp"]) ||
    !isset($_GET["legion"]) ||
    !isset($_GET["jabatan"]) ||
    !isset($_GET["gambar"])) {
        // redirect
        header("Location: latihan1.php");
        exit;
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        img{
            height : 250px;
            width : auto;
        }
    </style>
    
    <title>Detail Pasukan</title>
</head>
<body>
    <h2>Detail Pasukan</h2>
    <ul>
        <li><img src="img/<?= $_GET["gambar"];?>" alt=""></li>
        <li><?= $_GET["nama"];?></li>
        <li><?= $_GET["nrp"];?></li>
        <li><?= $_GET["legion"];?></li>
        <li><?= $_GET["jabatan"];?></li>
    </ul>

    <a href="latihan1.php">kembali</a>
</body>
</html>