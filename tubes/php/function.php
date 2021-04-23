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

        $img = htmlspecialchars($data['img']);
        $nama = htmlspecialchars($data['nama']);
        $deskripsi = htmlspecialchars($data['deskripsi']);
        $harga = htmlspecialchars($data['harga']);
        $kategori = htmlspecialchars($data['kategori']);

        $query = "INSERT INTO fashion
                    VALUES
                    ('','$img','$nama','$deskripsi','$harga','$kategori')";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapus($id){
        $conn = koneksi();

        mysqli_query($conn, "DELETE FROM fashion WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        $conn = koneksi();

        $id = $data["nomor"];
        $img = htmlspecialchars($data['img']);
        $nama = htmlspecialchars($data['nama']);
        $deskripsi = htmlspecialchars($data['deskripsi']);
        $harga = htmlspecialchars($data['harga']);
        $kategori = htmlspecialchars($data['kategori']);

        $query = "UPDATE
                    SET
                    img = '$img',
                    nama = '$nama',
                    deskripsi = '$deskripsi',
                    harga = '$harga',
                    kategori = '$kategori',
                    WHERE nomor = '$id'
                    ";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function registrasi($data){
        $conn = koneksi();
        $username = strtolower(stripcslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);

        $result = mysqli_query($conn, "SELECT username FROM pengguna WHERE username = '$username'");
        if (mysqli_fetch_assoc($result)) {
            echo "<script>
                    alert ('username sudah digunakan');
                    </script>";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        $query_tambah = "INSERT INTO pengguna VALUES('','$username','$password')";
        mysqli_query($conn, $query_tambah);

        return mysqli_affected_rows($conn);
    }
?>