<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1b</title>
</head>
<body>
    <table border="1" cellspscing="0" cellpadding="10">
        
        <tr>
            <th></th>
            <?php for ($i=1; $i <= 5 ; $i++) : ?>
                <td>kolom <?= $i; ?></td>
            <?php endfor; ?>
        </tr>
        
        <?php for ($i = 1; $i <= 5; $i++) : ?>
        

            <?php for ($j=0; $j < 1; $j++) : ?>
                <th><?= "Baris $i"; ?></th>
            <?php endfor; ?>
                    <?php for ($j=1; $j <= 5; $j++) : ?>
                    <td><?= " baris ke $i, kolom ke $j"; ?></td>
                    <?php endfor; ?>
            </tr>

        <?php endfor; ?>
        
        
        
        
    </table>
</body>
</html>