<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 c</title>

    <style>
        .lingkaran {
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
    </style>

</head>

<body>
    <tr>
    <?php for ($i=1; $i <=1 ; $i++) : ?>   
        <div class="lingkaran">
            <td><p><?php echo "$i"; ?></p></td>
            <?php for ($j=2; $j <=2 ; $j++) : ?>
            <th></th>
            
            <?php endfor; ?>
        </div>
    <?php endfor; ?>
    </tr> 

    <?php for ($i=2; $i <= 3 ; $i++) : ?>
        
        <?php for ($j=1; $j <3 ; $j++) : ?>
        <div class="lingkaran">
            <th><p><?php echo"$i"; ?></p></th>
        </div>
        <?php endfor;?>
    <?php endfor;?>

    <?php for ($i=3; $i <= 3 ; $i++) : ?>
        <?php for ($j=1; $j <4 ; $j++) : ?>
            <th></th>
        <?php endfor;?>
        <div class="lingkaran">
            <td><p><?php echo"$i"; ?></p></td>
        </div>
    <?php endfor;?>
    
    

   
</body>
</html>