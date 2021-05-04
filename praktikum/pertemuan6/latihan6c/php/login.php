<?php
    session_start();
    require 'function.php';

    if(isset($_SESSION["username"])){
        header("location: admin.php");
        exit;
    }

    if (isset($_POST["submit"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

        if (mysqli_num_rows($cek_user) > 0 ) {
            $row = mysqli_fetch_assoc($cek_user);
            if (password_verify($password , $row["password"])) {
                $_SESSION["username"] = $_POST["username"];
                $_SESSION["hash"] = hash('sha256', $row["id"], false);
            
            if (isset($_POST["remember"])) {
                setcookie('username', $row["username"], time() + 60 * 60 *24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }


            if (hash('sha256', $row["id"]) == $_SESSION["hash"]) {
                header("location: admin.php");
                die;
            }
            header("location: ../index.php");
            die;
            }
        }
        $error = true;
    }

    if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
        $username = $_COOKIE['username'];
        $hash = $_COOKIE['hash'];

        $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username");
        $row = mysqli_fetch_assoc($result);

        if ($hash === hash('sha256', $row['id'], false) ) {
            $_SESSION['username'] = $row["username"];
            header("location: admin.php");
            exit;
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
    <style>
      
    </style>
    <title>Tubes PW</title>
  </head>
  <body>
  <div class="login">
  <form action="" method="post">
    <?php if (isset($error)): ?>
        <p style="color:red; font-style:italic;">username atau password salah</p>
    <?php endif;?>
    <table>
        <tr>
            <td><label for="username">Username</label></td>
            <td>:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td><label for="password">Password</label></td>
            <td>:</td>
            <td><input type="password" name="password"></td>
        </tr>
    </table>
    <div class="remember">
        <input type="checkbox" name="remember" id="">
        <label for="remember">Remember me</label>
    </div>
    <button type="submit" name="submit">Login</button>
    <div class="registrasi">
        <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
    </div>
  </form>
  </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>