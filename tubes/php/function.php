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

function upload(){
    $nama_file = $_FILES['gambar']['name'];
    $tipe_file = $_FILES['gambar']['type'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    if ($error == 4) {
        return 'no-image.jpg';
    }

    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
                alert ('file harus berupa jpg, jpeg, png, atau jfif');
                </script> ";
        return false;
    }

    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
                alert ('file yang and pilih bukan gambar');
                </script> ";
        return false;
    }

    if ($ukuran_file > 10000000) {
        echo "<script>
                alert ('ukuran file terlalu besar');
                </script> ";
        return false;
    }

    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../assets/img/' .$nama_file_baru);

    return $nama_file_baru;
}

function tambah($data){
    $conn = koneksi();
    
    $nama = htmlspecialchars($data['nama']);
    $harga = htmlspecialchars($data['harga']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $tipe = htmlspecialchars($data['tipe']);

    $gambar = upload();
    if(!$gambar){
        return false;
    }
    
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
    $gambar_lama = htmlspecialchars($data['gambar_lama']);
    $nama = htmlspecialchars($data['nama']);
    $harga = htmlspecialchars($data['harga']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $tipe = htmlspecialchars($data['tipe']);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    if ($gambar == 'no-image.jpg') {
        $gambar = $gambar_lama;
    }
    
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

    $b = query("SELECT * FROM barang WHERE id = $id");
    if ($b['gambar'] != 'no-image.jpg') {
        unlink("../assets/img/" .$b['gambar']);
    }
    
    mysqli_query($conn, "DELETE FROM barang WHERE id = $id") or die(mysqli_error($conn));
    
    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $conn = koneksi();

    $query = "SELECT * FROM barang
                WHERE 
                nama LIKE '%$keyword%' OR
                tipe LIKE '%$keyword%'";
    
    $result = mysqli_query($conn, $query);

    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    
    return $rows;
}

function login($data){
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['login'] = true;

            header("Location: admin.php");
            exit;
        }
    }

    return [
        'error' => true ,
        'pesan' => 'username / password salah'
    ];
}

function registrasi($data){
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $username = htmlspecialchars(strtolower($data['username']));
    $password1 = mysqli_real_escape_string($conn, $data['password1']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    if (empty($username) || empty($password1) || empty($password2)) {
        echo "<script>
                alert ('username / password harus diisi');
                document.location.href = 'registrasi.php';
                </script>";
    }

    if (query("SELECT * FROM user WHERE username = '$username'")) {
        echo "<script>
                alert ('username sudah digunakan');
                document.location.href = 'registrasi.php';
                </script>";
    }

    if ($password1 !== $password2) {
        echo "<script>
                alert ('konfirmasi password tidak sesuai');
                document.location.href = 'registrasi.php';
                </script>";
    }

    if (strlen($password1) < 5) {
        echo "<script>
                alert ('password terlalu lemah');
                document.location.href = 'registrasi.php';
                </script>";
    }

    $password_baru = password_hash($password1, PASSWORD_DEFAULT);
    $query = "INSERT INTO user
                VALUES
                ('', '$nama', '$email', '$username', '$password_baru')
                ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
?>