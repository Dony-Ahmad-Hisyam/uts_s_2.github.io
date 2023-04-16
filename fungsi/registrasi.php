<?php
include_once('../config/config.php');

$nama_suplier = $_POST['nama_suplier'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$file = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$tipe = $_FILES['foto']['type'];
$tmp = $_FILES['foto']['tmp_name'];

$path = "../upload/".$file;

if($tipe == "image/jpeg" || $tipe == "image/png"){
    if($ukuran <= 1000000){
        if(move_uploaded_file($tmp, $path)){
            $data = mysqli_query($connection, "INSERT INTO suplier(nama_suplier,email,password,foto) VALUES('$nama_suplier','$email','$password','$file')");
                if($data){
                      echo '<script>alert("Berhasil di TAMBAHKAN!!")</script>';
                      echo '<meta http-equiv="refresh" content="0.2;url=../main/registrasi.php">';
                }else{
                      echo "Gagal";
                }
        }else {
            echo "Upload Failed";
        }
    }else { 
        echo "ukuran";
    }
}else {
    echo "type";
}




?>
