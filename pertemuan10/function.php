<?php
function koneksi(){
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn, "latihan_pw");

    return $conn;
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

        $gambar = htmlspecialchars($data['foto']);
        $nama = htmlspecialchars($data['nama']);
        $email = htmlspecialchars($data['email']);
        $pangkat = htmlspecialchars($data['pangkat']);

        $query = "INSERT INTO survey_corps
                    VALUES
                    ('','$gambar','$nama','$email','$pangkat');
                    ";
        mysqli_query($conn, $query);

        echo mysqli_error($conn);

        return mysqli_affected_rows($conn);
    } 
?>