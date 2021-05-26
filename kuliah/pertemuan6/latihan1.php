<?php
    // Hafadz Hazmirullah
    // https://github.com/kangmiru/pw2021-203040022
    // Assosiative Array
    // 11-03-2021
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        .kotak {
            height: 30px;
            width: 30px;
            background-color: aquamarine;
            text-align: center;
            line-height: 30px;
            margin : 3px;
            float: left;
            transition: 0.5s;
        }

        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>

    <title>Latihan Array</title>
</head>
<body>

    <?php
        $angka = [
            [1,2,3],
            [4,5,6],
            [7,8,9]
        ];
    ?>
    <?php foreach ($angka as $a ):?>
        <?php foreach ($a as $b):?>
            <div class="kotak"><?= $b; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>









</body>
</html>