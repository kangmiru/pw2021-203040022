<?php
    $pemain=[
        [
            "nama" => "Mohamad Salah",
            "klub" => "Liverpool"
        ],
        [
            "nama" => "Cristiano Ronaldo",
            "klub" => "Juventus"
        ],
        [
            "nama" => "leonel Messi",
            "klub"=> "Barcelona"
        ],
        [
            "nama" => "Zlatan Ibrahimovic",
            "klub"=> "Ac Milan"
        ],
        [
            "nama" => "Neymar Jr",
            "klub"=> "Paris Saint Germain"
        ],
        [
            "nama" => "Luca Modric",
            "klub"=> "Real Madrid"
        ],
        [
            "nama" => "Sadio Mane",
            "klub"=> "Liverpool"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3c</title>
</head>
<body>
    <div class="kotak">
        <h2>Daftar pemain bola terkenal di klubnya:</h2>
        <ol>
            <?php $player = sort($pemain);?>
            <?php foreach ($pemain as $tim) : ?>
            <li><?= $tim["nama"];?>       :   <?= $tim["klub"];?></li>
            <?php endforeach; ?>
        </ol>
    </div>
</body>
</html>