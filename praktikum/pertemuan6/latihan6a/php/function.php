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

        $gambar = htmlspecialchars($data['gambar']);
        $nama = htmlspecialchars($data['nama']);
        $deskripsi = htmlspecialchars($data['deskripsi']);
        $harga = htmlspecialchars($data['harga']);
        $tipe = htmlspecialchars($data['tipe']);

        $query = "INSERT INTO barang
                    VALUES
                    ('','$gambar','$nama','$harga','$deskripsi','$tipe')";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapus($id){
        $conn = koneksi();

        mysqli_query($conn, "DELETE FROM barang WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        $conn = koneksi();

        $id = $data["nomor"];
        $gambar = htmlspecialchars($data['gambar']);
        $nama = htmlspecialchars($data['nama']);
        $deskripsi = htmlspecialchars($data['deskripsi']);
        $harga = htmlspecialchars($data['harga']);
        $tipe = htmlspecialchars($data['tipe']);

        $query = "UPDATE
                    SET
                    gambar = '$gambar',
                    nama = '$nama',
                    harga = '$harga',
                    deskripsi = '$deskripsi',
                    tipe = '$tipe',
                    WHERE nomor = '$id'
                    ";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>