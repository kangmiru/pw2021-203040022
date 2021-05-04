<?php
    function koneksi() {
        $conn = mysqli_connect("localhost","root","");
        mysqli_select_db($conn,"pw_tubes_203040022");

        return $conn;
    }

    function query($sql){
        $conn = koneksi();
        $result = mysqli_query($conn, "$sql");
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data){
        $conn = koneksi();

        $img = htmlspecialchars($data['gambar']);
        $nama = htmlspecialchars($data['nama']);
        $deskripsi = htmlspecialchars($data['deskripsi']);
        $harga = htmlspecialchars($data['harga']);
        $kategori = htmlspecialchars($data['tipe']);

        $query = "INSERT INTO barang
                    VALUES
                    ('','$img','$nama','$harga','$deskripsi','$kategori')";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>