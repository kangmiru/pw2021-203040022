<?php
require 'function.php';

if (isset($_POST['registrasi'])) {
    if(registrasi($_POST) > 0){
        echo "<script>
                alert ('user berhasil ditambahkan. Silakan login');
                document.location.href = 'login.php';
                </script>";
    }else{
        echo 'user gagal ditambahkan';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <h3>Form Registrasi</h3>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama : <input type="text" name="nama" autofocus autocomplete="off" required></label>
            </li>
            <li>
                <label for="email">Email : <input type="text" name="email" required></label>
            </li>
            <li>
                <label for="username">Username : <input type="text" name="username" required></label>
            </li>
            <li>
                <label for="password1">Password : <input type="password" name="password1" id="" required></label>
            </li>
            <li>
                <label for="password2">Konfirmasi Password : <input type="password" name="password2" id="" required></label>
            </li>
            <li>
                <button type="submit" name="registrasi">Registrasi</button>
            </li>
        </ul>
    </form>
</body>
</html>