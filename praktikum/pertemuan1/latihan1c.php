<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 c</title>

    <style>
        .bola {
            width : 30px;
            height : 30px;
            background-color :red;
            border-radius : 100% ; 
            line-height : 30px;
            text-align : center;

        }

        .clear {
            clear : both;
        }
    </style>

</head>

<body>

<table>
    <?php for ($i = 1; $i < 6 ; $i++) : ?>
    <tr>
        <?php for ($j=1;$j<$i;$j++):?>
        <td><div class="bola"><?= $j?></div></td>
        <?php endfor;?>
    </tr>
    <?php endfor;?>

</table>
    
    

   
</body>
</html>