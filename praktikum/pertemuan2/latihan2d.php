<?php
    function hitungdeterminan($a, $b, $c, $d) {
        echo "<table class=tabel cellspacing='5' cellpadding='5'>
        <tr>
            <td>$a</td>
            <td>$b</td>
        </tr>
        <tr>
            <td>$c</td>
            <td>$d</td>
        </tr>
        </table>";
        echo "determinan dari matriks tersebut adalah = " ;
        echo (($a * $d)-($b * $c));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        .tabel {
            border-left: 2px solid black;
            border-right: 2px solid black;
        }
    </style>
    
    <title>Latihan 2d</title>
</head>
<body>
    <?= hitungdeterminan(1,2,3,4);?>
</body>
</html>