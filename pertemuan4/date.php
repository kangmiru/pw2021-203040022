<?php
/*
    Hafadz Hazmirullah
    203040022
    https://github.com/kangmiru/pw2021-203040022
    pertemuan  - 18/02/2021
    Penggunaan Function
*/
?>

<?php
    // Date
    echo date("l");
    echo "<br>";
    echo date("d");
    echo "<br>";
    echo date("l, d-M-Y");
    echo "<br><br>";

    // Time
    echo date("l", time()+60*60*24*120);
    echo "<br>";
    echo date("l", time()-60*60*24*120);
    echo "<br>";
    echo date("d-M-Y", time()+60*60*24*9);
    echo "<br><br>";

    // mktime
    // mktime(0, 0, 0, 0, 0, 0,)
    // jam, menit, detik, bulan, tanggal, tahun
    echo date("l", mktime(0,0,0,3,25,2003));
    echo "<br><br>";
    
    // strtotime
    echo date("l", strtotime("25 mar 2003"));
?>