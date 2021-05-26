<?php
/*
    Hafadz Hazmirullah
    203040022
    https://github.com/kangmiru/pw2021-203040022
    pertemuan  - 04/03/2021
    Array III
*/
?>

<?php
$mahasiswa = [
    ["Hafadz Hazmirullah","203040022","Teknik Informatika","203040022@unpas.ac.id"],
    ["Hazmi","203040055","Teknik Informatika","203040055@gmail.com"],
    ["Asep","203040545","Teknik Informatika","203040545@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?php echo $mhs[0]; ?></li>
        <li>NRP : <?php echo $mhs[1]; ?></li>
        <li>Jurusan : <?php echo $mhs[2]; ?></li>
        <li>Email : <?php echo $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>