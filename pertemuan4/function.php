<?php
/*
    Hafadz Hazmirullah
    203040022
    https://github.com/kangmiru/pw2021-203040022
    pertemuan  - 18/02/2021
    Penggunaan Function
*/
?>

<?php
    function salam($waktu = "Datang", $nama = "Admin!") {
        return "Selamat $waktu, $nama";
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?php echo salam("Pagi", "Hafadz"); ?></h1>
</body>
</html>