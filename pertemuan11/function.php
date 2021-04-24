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
    
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    
    return mysqli_affected_rows($conn);
} 

function hapus($id){
    $conn = koneksi();
    
    mysqli_query($conn, "DELETE FROM survey_corps WHERE id = $id") or die(mysqli_error($conn));
    
    return mysqli_affected_rows($conn);
}

function ubah($data){
    $conn = koneksi();
    
    $id = $data['id'];
    $gambar = htmlspecialchars($data['foto']);
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $pangkat = htmlspecialchars($data['pangkat']);
    
    $query = "UPDATE survey_corps SET
                foto = '$gambar',
                nama = '$nama',
                email = '$email',
                pangkat =  '$pangkat'
                WHERE id = $id ";
    
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    
    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $conn = koneksi();

    $query = "SELECT * FROM survey_corps
                WHERE 
                nama LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                pangkat LIKE '%$keyword%'";
    
    $result = mysqli_query($conn, $query);

    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    
    return $rows;
}
?>