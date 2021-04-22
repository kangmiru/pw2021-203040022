<?php
function koneksi(){
    return mysqli_connect("localhost","root","","latihan_pw");
}

function query($query){
    $conn = koneksi();
    $result = mysqli_query($conn, $query);
    // jika data hanya 1
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    
    return $rows;
}

    function tambah($data){
        $conn = koneksi();

        $nama = htmlspecialchars($data['nama']);
        $email = htmlspecialchars($data['email']);
        $pangkat = htmlspecialchars($data['pangkat']);
        $gambar = htmlspecialchars($data['gambar']);

        $query = "INSERT INTO survey_corps
                    VALUES
                    (null,'$nama','$email','$pangkat','$gambar');
                    ";
        mysqli_query($conn, $query);

        echo mysqli_error($conn);

        return mysqli_affected_rows($conn);
    } 
?>