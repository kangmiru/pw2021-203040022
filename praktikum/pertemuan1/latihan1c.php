<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 c</title>

    <style>
        td {
            width : 30px;
            height : 30px;
            background-color :red;
            border-radius : 100% ; 
            margin : 10px;
            line-height : 30px;
        }

        p {
            line-height : 30px;
            padding-left :10px;

        }

        .clear {
            clear : both;
        }
    </style>

</head>

<body>

<table>
    <tr>
    <?php for ($i=1; $i <=1 ; $i++) : ?>   
        <td><p><?php echo "$i"; ?></p></td>
        <?php for ($j=2; $j <=2 ; $j++) : ?>
        <th></th>
        <?php endfor; ?>
        
    <?php endfor; ?>
    </tr> 
        
        <?php for ($j=1; $j <3 ; $j++) : ?>
            <?php for ($i=2; $i < 3 ; $i++) :?>
            <td><p><?php echo"$i"; ?></p></td>
            <?php endfor;?>
        <?php endfor;?>
    </tr>
        <?php for ($j=1; $j <4 ; $j++) : ?>
            <?php for ($i=3; $i <4 ; $i++) :?>
            <td><p><?php echo"$i"; ?></p></td>
            <?php endfor;?>
        <?php endfor;?>


</table>
    
    

   
</body>
</html>