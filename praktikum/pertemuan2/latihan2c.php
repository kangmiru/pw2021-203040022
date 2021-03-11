<?php
    function soal($tumpukanbola) {
        return "<div class='bola'><?= $tumpukanbola; ?></div>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        .bola {
            border-radius: 100%;
            height: 30px;
            width: 30px;
            background-color: salmon;
            line-height:30px;
            text-align : center;
        }
    </style>
    
    <title>Latihan 2c</title>
</head>
<body>
    <table>
    <?php for ($i=1;$i<7;$i++) :?>
    <tr>
        <?php for ($j=1;$j<$i;$j++):?>

        <td><?= soal($j);?> </td>
        
        <?php endfor;?>
    </tr>
    <?php endfor;?>
    </table>
    
</body>
</html>