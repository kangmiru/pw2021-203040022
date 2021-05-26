<?php
/*
    Hafadz Hazmirullah
    203040022
    https://github.com/kangmiru/pw2021-203040022
    pertemuan  - 04/03/2021
    Array II
*/
?>

<?php
// pengulangan pada array
// for / foreach
$angka = [3,6,78,55,5,4,6,72,2];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .kotak {
            width : 50px;
            height :50px;
            background-color : aquamarine;
            line-height : 50px;
            text-align : center;
            float : left;
            margin : 5px;
        }

        .clear {
            clear:both;
        }
    </style>
    
    <title>latihan 2</title>
</head>
<body>

<?php for ($i=0; $i < count($angka); $i++) : ?>
    <div class="kotak"><?php echo $angka[$i] ; ?></div>
<?php endfor; ?>

<div class="clear"></div>

<?php foreach ($angka as $a ) : ?>
    <div class="kotak"><?php echo $a; ?></div>
<?php endforeach; ?>
    
</body>
</html>