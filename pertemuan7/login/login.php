<?php
    if ( isset($_POST["submit"])) {
        if ($_POST["user"] == "admin" && $_POST["pass"] == "123") {
            header("Location : admin.php");
            exit;
        } else {
            $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <h1>Silakan login</h1>
    <?php if(isset($error)) : ?>
    <p style="color : red; font-style: italic;">password / username salah</p>
    <?php endif;?>
    <ul>
        <form action="" method="post">
            <li>
                <label for="user">username :</label>
                <input type="text" name="user" id="user">
            </li>
            <li>
                <label for="pass">password :</label>
                <input type="password" name="pass" id="pass">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>
</body>
</html>