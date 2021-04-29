<?php
function koneksi(){
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn, "pw_tubes_203040022");

    return $conn;
}

function query($query){
    $conn = koneksi();
    $result = mysqli_query($conn, $query);

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
    
    $gambar = htmlspecialchars($data['gambar']);
    $nama = htmlspecialchars($data['nama']);
    $harga = htmlspecialchars($data['harga']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $tipe = htmlspecialchars($data['tipe']);
    
    $query = "INSERT INTO barang
                VALUES
                ('','$gambar','$nama','$harga','$deskripsi','$tipe');
                ";
    
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    
    return mysqli_affected_rows($conn);
} 

function ubah($data){
    $conn = koneksi();
    
    $id = $data['id'];
    $gambar = htmlspecialchars($data['gambar']);
    $nama = htmlspecialchars($data['nama']);
    $harga = htmlspecialchars($data['harga']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $tipe = htmlspecialchars($data['tipe']);
    
    $query = "UPDATE barang SET
                gambar = '$gambar',
                nama = '$nama',
                harga = '$harga',
                deskripsi =  '$deskripsi',
                tipe = '$tipe'
                WHERE id = $id ";
    
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    
    return mysqli_affected_rows($conn);
}

function hapus($id){
    $conn = koneksi();
    
    mysqli_query($conn, "DELETE FROM barang WHERE id = $id") or die(mysqli_error($conn));
    
    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $conn = koneksi();

    $query = "SELECT * FROM barang
                WHERE 
                nama LIKE '%$keyword%' OR
                tipe LIKE '%$keyword%'
                ";
    
    $result = mysqli_query($conn, $query);

    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    
    return $rows;
}
?>