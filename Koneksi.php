<?php 
 
$server = "localhost";
$userName = "root";
$password = "";
$database = "tugasakhirpwd";
 
$conn = mysqli_connect($server, $userName, $password, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>