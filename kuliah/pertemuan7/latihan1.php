<?php
    // Hafadz Hazmirullah
    // https://github.com/kangmiru/pw2021-203040022
    // Get & Post
    // 18-03-2021

    // variabel scope / lingkup variabel
    // $x = 25;

    // function tampilX() {
    //     global $x;
    //     echo $x;
    // }

    // tampilX();

    // SUPERGLOBALS
    // variabel global milik PHP merupakan array assosiative
    // var_dump($_GET);
    // var_dump($_POST);
    // var_dump($_REQUEST);
    // var_dump($_SERVER);
    // var_dump($_SESSION);
    // var_dump($_COOKIE);
    // var_dump($_ENV);

    // $_GET
    // var_dump($_GET);
    $pasukan = [
        [
            "nrp" => "001",
            "nama" => "Levi Ackerman",
            "legion" => "Pengintai",
            "jabatan" => "Kapten",
            "gambar" => "levi.png"
        ],
        [
            "nrp" => "002",
            "nama" => "Mikasa Ackerman",
            "legion" => "Pengintai",
            "jabatan" => "Pasukan",
            "gambar" => "mikasa.png"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Get</title>
</head>
<body>
<h2>Anggota Pasukan</h2>
    <ul>
    <?php foreach ($pasukan as $p) :?>
        <li><a href="latihan2.php?nama=<?= $p["nama"];?>&nrp=<?= $p["nrp"]; ?>&legion=<?= $p["legion"]; ?>&jabatan=<?= $p["jabatan"]; ?>&gambar=<?= $p["gambar"]; ?>"><?= $p["nama"];?></a></li>
    <?php endforeach; ?>
    </ul>
</body>
</html>