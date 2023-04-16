<?php
include_once('../config/config.php');

$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];

$file = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$tipe = $_FILES['foto']['type'];
$tmp = $_FILES['foto']['tmp_name'];

$path = "../upload/".$file;

if($tipe == "image/jpeg" || $tipe == "image/png" || $tipe == "image/avif"){
    if($ukuran <= 1000000){
        if(move_uploaded_file($tmp, $path)){
            $data = mysqli_query($connection, "INSERT INTO barang(nama_barang,harga,foto) VALUES('$nama_barang','$harga','$file')");
                if($data){
                      echo '<script>alert("Berhasil di TAMBAHKAN!!")</script>';
                      echo '<meta http-equiv="refresh" content="0.2;url=../main/barang.php">';
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
