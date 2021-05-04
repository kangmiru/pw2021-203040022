<?php
require 'function.php';

if (isset($_POST['registrasi'])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
                alert ('Registrasi berhasil dilakukan. Silakan Login');
                document.location.href = 'login.php';
                </script>";
    }else {
        echo "<script>
                alert ('Registrasi gagal. Coba lagi');
                document.location.href = 'registrasi.php';
                </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/registrasi.css">

    <title>Registrasi</title>
</head>
<body>

<div class="container">
<h3>Silakan Registrasi</h3>
<form action="" method="post">
    <ul>
        <li>
            <label for="nama">Nama : </label><br>
            <input type="text" name="nama" autofocus autocomplete="off" required>
        </li>
        <li>
            <label for="email">Email : </label><br>
            <input type="text" name="email" required>
        </li>
        <li>
            <label for="username">Username : </label><br>
            <input type="text" name="username" required>
        </li>
        <li>
            <label for="password1">Password : </label><br>
            <input type="password" name="password1" id="" required>
        </li>
        <li>
            <label for="password2">Konfirmasi Password : </label><br>
            <input type="password" name="password2" id="" required>
        </li>
        <li>
            <button type="submit" name="registrasi">Registrasi</button>
        </li>
    </ul>
</form>
</div>
</body>
</html>