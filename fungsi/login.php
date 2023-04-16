<?php
session_start();
include "../config/config.php";

$email = $_POST["email"];
$pass = md5($_POST["password"]);

$query = "SELECT * from suplier where email ='".$email."' and password ='".$pass."' limit 1";
$hasil = mysqli_query($connection,$query);
$data = mysqli_num_rows($hasil);

if($data>0){
    $key = mysqli_fetch_assoc($hasil);
    $_SESSION['no_suplier']=$key["no_suplier"];
    $_SESSION['nama_suplier']=$key["nama_suplier"];
    $_SESSION['email']=$key["email"];
    $_SESSION['foto']=$key["foto"];
    $_SESSION['password']=$key["password"];
    header("Location: ../main/index.php");
}else{
    echo "<script>alert('Email dan Password Salah!') </script>";
    echo '<meta http-equiv="refresh" content="0.2;url=../main/login.php">';
    
}

?>