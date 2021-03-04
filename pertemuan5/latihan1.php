<?php
/*
    Hafadz Hazmirullah
    203040022
    https://github.com/kangmiru/pw2021-203040022
    pertemuan  - 04/03/2021
    Array
*/
?>

<?php
    // array
    // variabel yang memiliki banyka nilai
    // elemen pada array boleh memiliki tipe data yang berbeda

    // cara lama
    $hari = array("senin","selasa","rabu");
    // cara baru
    $bulan =["januari","Februari","maret"];
    $acak = [123, "abs", false];

    // menampilkan array
    var_dump($hari);
    echo "<br>";
    print_r($bulan);
    // menampilkan 1 array
    echo "<br>";
    echo "$acak[0]";
    echo "<br>";
    echo "$bulan[1]";

    // menambahkan nilai array
    echo "<br><br>";
    var_dump($hari);
    $hari[] = "kamis";
    $hari[] = "jumat";
    var_dump($hari);

?>