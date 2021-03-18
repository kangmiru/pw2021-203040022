<?php
    $old = [
        "Mohamad Salah",
        "Cristiano Ronaldo",
        "leonel Messi",
        "Zlatan Ibrahimovic",
        "Neymar Jr"
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 3b</title>
</head>
<body>
    <h2>Daftar pemain lama</h2>
    <ol>
        <?php $lama = sort($old); ?>
        <?php foreach ($old as $l): ?>
        <li><?= $l ; ?></li>
        <?php endforeach;?>
    </ol>

    <h2>Daftar pemain baru</h2>
    <ol>
        <?php $baru = array_push($old,"Luca Modric","Sadio Mane"); ?>
        <?php foreach ($old as $l):?>
        <li><?= $l ; ?></li>
        <?php endforeach;?>
    </ol>
</body>
</html>