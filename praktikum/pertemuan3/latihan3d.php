<?php
    $pemain=[
        [
            "nama" => "Mohamad Salah",
            "klub" => "Liverpool",
            "main" => "90",
            "gol" => "103",
            "assist" => "8"
        ],
        [
            "nama" => "Cristiano Ronaldo",
            "klub" => "Juventus",
            "main" => "100",
            "gol" => "76",
            "assist" => "30"
        ],
        [
            "nama" => "leonel Messi",
            "klub"=> "Barcelona",
            "main" => "120",
            "gol" => "80",
            "assist" => "12"
        ],
        [
            "nama" => "Zlatan Ibrahimovic",
            "klub"=> "Ac Milan",
            "main" => "100",
            "gol" => "10",
            "assist" => "20"
        ],
        [
            "nama" => "Neymar Jr",
            "klub"=> "Paris Saint Germain",
            "main" => "109",
            "gol" => "56",
            "assist" => "15"
        ],
        [
            "nama" => "Luca Modric",
            "klub"=> "Real Madrid",
            "main" => "87",
            "gol" => "12",
            "assist" => "48"
        ],
        [
            "nama" => "Sadio Mane",
            "klub"=> "Liverpool",
            "main" => "63",
            "gol" => "30",
            "assist" => "12"
        ]
    ];

    $jmlh_main = 0;
    foreach ($pemain as $main => $jumlah_m)
    {
    $jmlh_main += $jumlah_m['main'];
    };

    $jmlh_gol = 0;
    foreach ($pemain as $gol => $jumlah_g)
    {
    $jmlh_gol += $jumlah_g["gol"];
    };

    $jmlh_assist = 0;
    foreach ($pemain as $assist => $jumlah_a)
    {
    $jmlh_assist += $jumlah_a["assist"];
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        thead,
        .jumlah {
            font-weight : bold;
        }
    </style>

    <title>latihan 3d</title>
</head>
<body>
    <table border = 1 cellpadding = "10" cellspacing = "0">
        <thead>    
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Club</td>
                <td>Main</td>
                <td>Gol</td>
                <td>Assist</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pemain as $no => $data): ?>
            <tr>
                <td><?= $no+1;?></td>
                <td><?= $data["nama"];?></td>
                <td><?= $data["klub"];?></td>
                <td><?= $data["main"];?></td>
                <td><?= $data["gol"];?></td>
                <td><?= $data["assist"];?></td>
            </tr>
            <?php endforeach;?>
            <tr>
                <td class="jumlah">#</td>
                <td colspan="2" class="jumlah">Jumlah</td>
                <td><?= $jmlh_main;?></td>
                <td><?= $jmlh_gol;?></td>
                <td><?= $jmlh_assist;?></td>
            </tr>
        </tbody>
        
    </table>
</body>
</html>