<?php
// koneksi ke database
$conn = mysqli_connect("localhost","root","","latihan_pw");

// mengambil data dari tabel di database / query data
$result = mysqli_query($conn,"SELECT * FROM survey_corps");

// ambil data (fetch) dari objek result
// mysqli_fetch_row() = mengembalikan array numerik
// mysqli_fetch_assoc() = mengembalikan array assosiative
// mysqli_fetch_array() = mengembalikan keduanya
// mysqli_fetch_object() = 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Survey Corps</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Pangkat</th>
        </tr>

        <?php $i = 1; ?>
        <?php while ($aot = mysqli_fetch_assoc($result)) :?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">Edit</a> |
                <a href="">Hapus</a>
            </td>
            <td><img src="img/<?= $aot['foto'] ?>" alt="" style="width:150px;"></td>
            <td><?= $aot['id']; ?></td>
            <td><?= $aot['nama']; ?></td>
            <td><?= $aot['email']; ?></td>
            <td><?= $aot['pangkat']; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile ; ?>
    </table>
</body>
</html>