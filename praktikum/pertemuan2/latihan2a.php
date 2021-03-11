<?php
    function gantistyle($tulisan,$style1 = "style1",$style2 = "style2"){
        return "<div class = $style2><p class = $style1>$tulisan</p></div>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2a</title>
</head>
<style>
    .style1 {
        font-size: 28;
        font-family: arial;
        color: #8c782d;
        font-weight: bolder;
        font-style: italic;
    }

    .style2{
        border : 2px solid black;
        box-shadow : 2px 2px 2px black;
        margin: auto;
        height: 90px;
        width: 1000px;
    }

</style>

<body>
    <h1><?php echo gantistyle("Selamat datang di praktikum PW");?></h1>
    
</body>
</html>