<?php
require '../function.php';

$pasukan = cari($_GET['keyword']);

?>
<table border="1" cellspacing="0" cellpadding="10">
    <tr>
        <th>#</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>
    
    <?php if(empty($pasukan)):?>
        <tr>
            <td colspan="4"><p style="color:red; font-style:italic;">data anggota tidak ditemukan!</p></td>
        </tr>
    <?php endif;?>
    
    <?php $i =1; ?>
    <?php foreach($pasukan as $p): ?>
    <tr>
        <td><?= $i++;?></td>
        <td><img src="img/<?= $p['foto']; ?>" alt=""></td>
        <td><?= $p['nama']; ?></td>
        <td>
            <a href="detail.php?id=<?= $p['id']; ?>">lihat detail</a>
        </td>
    </tr>
    <?php endforeach;?>
</table>