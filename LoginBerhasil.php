<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'Koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"select * from userr where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
    $data = mysqli_fetch_assoc($login);
 
    // cek jika user login sebagai admin
    if($data['level']=="admin"){
 
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        // alihkan ke halaman dashboard admin
        header("location:Beranda.html");
 
    // cek jika user login sebagai pegawai
    }else if($data['level']=="user"){
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "user";
        // alihkan ke halaman dashboard pegawai
        header("location:HalamanUser.php");
 
    }else{
 
        // alihkan ke halaman login kembali
        header("location:Login.php?pesan=gagal");
    }   
}else{
    header("location:Login.php?pesan=gagal");
}
 
?>