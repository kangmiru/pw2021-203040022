<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .warna1 {
            background-color :salmon;
        }

        .warna2 {
            background-color : lightblue;
        }
    </style>

    <title>Tugas 1 Praktikum</title>
</head>
<body>
    <table border = 1 cellpadding = "10" cellspacing = "0">
        <?php for($i = 0 ; $i < 3; $i++) : ?>
        <tr>
            <?php for ($j = 0 ; $j < 6; $j++) : ?>
            <?php if ($j %2 == 0) : ?>
            <td class = "warna1"></td>
            <?php else : ?>
            <td class = "warna2"></td>
            <?php endif; ?>
            <?php endfor; ?>
        </tr>
        <tr>
            <?php for ($j = 0 ; $j < 6; $j++) : ?>
            <?php if ($j %2 == 1) : ?>
            <td class = "warna1"></td>
            <?php else: ?>
            <td class="warna2"></td>
            <?php endif; ?>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
        

    
    
    </table>
</body>
</html>