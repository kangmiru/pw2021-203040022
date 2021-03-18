<?php
    $kata = ["ada","abel","men","apung","nilai"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        .kotak {
            height :50px;
            width: 500px;
            border: 2px solid black;
        }
        p {
            text-align: center;
        }
    </style>
    
    <title>Latihan 3a</title>
</head>
<body>
    <div class="kotak">
        <p><?= "Array $kata[0]lah suatu vari$kata[1]yang dapat $kata[2]am$kata[3] banyak $kata[4]";?> </p>
    </div>
</body>
</html>