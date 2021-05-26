<?php
/*
    Hafadz Hazmirullah
    203040022
    https://github.com/kangmiru/pw2021-203040022
    pertemuan 2 - 11/02/2021
    sintaks dasar php
*/
?>

<?php
// standar output
// echo,print
// print_r
// var_dump

// menggunakan echo dan print 
// echo "Hafadz Hazmirullah";
// print "Hafadz Hazmirullah";

// menggunakan print_r
// print_r ("Hafadz Hazmirullah");

// menggunakan var_dump
// var_dump ("Hafadz Hazmirullah");

// menggunakan PHP di html
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar sintaks PHP</title>
</head>
<body>
    <h1>Halo, Selamat datang <?php echo "Hafadz";?></h1>
    <p><?php echo "ini adalah paragraf";?></p>

    <!-- mencoba html di php -->
    <?php echo"<h1>Hello World</h1>";?>
</body>
</html>

<?php
// variabel dan tipe data
// variabel

// $nama = "Hafadz Hazmirullah";

// echo "Halo nama saya $nama";

// operator
// aritmatika
// +, - , /, *

// echo 1 + 60;
// echo 50 -25;
// echo 50 / 2;
// echo 2 * 10;
// $x = 60;
// $y = 90;

// echo $y * $x;

// penggabung String
// .

// $nama_depan = "Hafadz";
// $nama_belakang ="Hazmirullah";

// echo $nama_depan . " " . $nama_belakang;

// assignment
// =,+=,-=,/=,*=,%=,.=

// $x = 2;
// $x -=7;
// echo $x;
// $nama ="Hafadz";
// $nama .= " ";
// $nama .= "Hazmirullah";
// echo $nama;

// perbandingan
// <,>,=,<=,>=,==,!=

// var_dump(2 != 4);

// identitas
// ===,!==

// var_dump(1 === "1");

// logika
// &&, ||, !

$x = 30;
var_dump ($x < 20 || $x % 2 == 0);
?>