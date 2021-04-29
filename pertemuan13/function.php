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

function upload(){
    $nama_file = $_FILES['foto']['name'];
    $tipe_file = $_FILES['foto']['type'];
    $ukuran_file = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmp_file = $_FILES['foto']['tmp_name'];

    // ketika gambar tidak diisi
    if ($error == 4) {
        // echo "<script>
        //         alert('gambar belum diisi');
        //         </script>";
        return 'no-image.jpg';
    }

    // cek ekstensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
                alert('file harus berupa jpg, jpeg, atau png');
                </script>";
        return false;
    }

    // cek type file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
                alert('file yang anda pilih bukan gambar');
                </script>";
        return false;
    }

    // cek ukuran file
    // maks 5mb == 5.000.000
    if ($ukuran_file > 5000000) {
        echo "<script>
                alert('ukuran gambar terlalu besar');
                </script>";
        return false;
    }

    // lolos pengecekan
    // siap upload file
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, 'img/' .$nama_file_baru);

    return $nama_file_baru;
}

function tambah($data){
    $conn = koneksi();
    
    // $gambar = htmlspecialchars($data['foto']);
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $pangkat = htmlspecialchars($data['pangkat']);

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }
    
    $query = "INSERT INTO survey_corps
                VALUES
                ('','$gambar','$nama','$email','$pangkat');
                ";
    
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    
    return mysqli_affected_rows($conn);
} 

function hapus($id){
    $conn = koneksi();

    // menghapus gambar di folder img
    $p = query("SELECT * FROM survey_corps WHERE id = $id");
    if ($p['foto'] != 'no-image.jpg') {
        unlink('img/' . $p['foto']);
    }
    
    mysqli_query($conn, "DELETE FROM survey_corps WHERE id = $id") or die(mysqli_error($conn));
    
    return mysqli_affected_rows($conn);
}

function ubah($data){
    $conn = koneksi();
    
    $id = $data['id'];
    $gambar_lama = htmlspecialchars($data['foto_lama']);
    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $pangkat = htmlspecialchars($data['pangkat']);
    
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    if ($gambar == 'no-image.jpg') {
        $gambar = $gambar_lama;
    }

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

function login($data){
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    // cek username
    if ($user = query("SELECT * FROM user WHERE username = '$username'")) {
        // cek password
        if (password_verify($password, $user['password'])){
            // set session
            $_SESSION['login'] = true;
            
            header("Location: index.php");
            exit;
        }        
    }
        return [
            'error' => true,
            'pesan' => "username / password salah"
        ];
    
}

function registrasi($data){
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $email = htmlspecialchars($data['email']);
    $username = htmlspecialchars(strtolower($data['username']));
    $password1 = mysqli_real_escape_string($conn, $data['password1']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    // jika username / password kosong
    if (empty($username) || empty($password1) || empty($password2)) {
        echo "<script>
                alert ('username / password tidak boleh kosong');
                document.location.href = 'registrasi.php';
                </script>";
        return false;
    }

    // jika username sudah ada
    if (query("SELECT * FROM user WHERE username = '$username'")) {
        echo "<script>
                alert ('username sudah digunakan');
                document.location.href = 'registrasi.php';
                </script>";
        return false;
    }

    // konfirmasi password
    if ($password1 !== $password2) {
        echo "<script>
                alert ('konfirmasi password tidak sesuai');
                document.location.href = 'registrasi.php';
                </script>";
        return false;
    }

    // jika password < 5 digit
    if (strlen($password1) < 5) {
        echo "<script>
                alert ('password terlalu lemah');
                document.location.href = 'registrasi.php';
                </script>";
        return false;
    }

    // jika username dan password sudah sesuai
    // enkripsi password
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);
    // insert ketabel
    $query = "INSERT INTO user
                VALUES
                ('','$nama','$email','$username','$password_baru')
                ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);

}
?>