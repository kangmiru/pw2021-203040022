<?php
    $jawabanIsset = "Isset adalah........... <br><br>";
    $jawabanEmpty = "Empty adalah............";

    function soal($style = "style") {
        $jawabanIsset = "Isset adalah........... <br><br>";
        $jawabanEmpty = "Empty adalah............";
        return "<div class = $style><p>$jawabanIsset $jawabanEmpty</p></div>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        .style {
            border : 2px solid black;
            height : 90px;
            width : 1000px;
            font-size: 18px;
        }
    </style>

    <title>Latihan 2b</title>
</head>
<body>
    <h1><?= soal();?></h1>
</body>
</html>