<?php 
    // $mahasiswa = [
    //     ["Hafadz Hazmirullah","203040022","mirufadz25@gmail.com","Teknik Informatika"],
    //     ["Qiana Shazza Azkadiana","303030022","qiana@gmail.com","Seni"]
    // ];

    // array assoiative 
    // definisi nya = array numerik, kecuali
    // key-nya adalah string yang dibuat
    
    $keluarga = [
        [
            "nama" => "Hafadz Hazmirullah",
            "ttl" => "Bandung, 25 Maret 2003",
            "email" => "mirufadz25@gmial.com",
            "pekerjaan" => "Mahasiswa",
            "gambar" => "hafadz.png"
        ],
        [
            "nama" => "Qiana Shazza Azkadina",
            "ttl" => "Bandung, 21 Juni 2012",
            "email" => "qiana@gmial.com",
            "pekerjaan" => "pelajar",
            "gambar" => "tv.jpg"
        ],
        [
            "nama" => "Rahmadhani Raudhatul Jannah",
            "ttl" => "Bandung, 03 Januari 1998",
            "email" => "Rahma@gmial.com",
            "pekerjaan" => "guru",
            "gambar" => "1.jpg"
        ],
        [
            "nama" => "Neti Hasanah",
            "ttl" => "Bandung, 1 Juni 19--",
            "email" => "neti@gmial.com",
            "pekerjaan" => "ibu rumah tangga",
            "gambar" => "2.jpg"
        ],
        [
            "nama" => "Agus Setia",
            "ttl" => "Bandung, 12 agustus 1969",
            "email" => "Agus@gmial.com",
            "pekerjaan" => "ASN",
            "gambar" => "ps.jpg"
        ]
    ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Keluarga</title>
</head>
<body>
    <h1>Daftar Keluarga</h1>

    <?php foreach ($keluarga as $klg):?>
    <ul>
        <li>
            <img src="img/<?= $klg["gambar"];?>">
        </li>
        <li>Nama : <?= $klg["nama"];?></li>
        <li>NRP : <?= $klg["ttl"];?></li>
        <li>Email : <?= $klg["pekerjaan"];?></li>
        <li>Jurusan : <?= $klg["email"];?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>