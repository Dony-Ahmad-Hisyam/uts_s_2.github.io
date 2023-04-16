<?php
include_once("../config/config.php");
$nama_barang = $_POST['nama_barang'];
$no_barang = $_POST['no_barang'];
$harga = $_POST['harga'];

$file = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$tipe = $_FILES['foto']['type'];
$tmp = $_FILES['foto']['tmp_name'];

$path = "../upload/".$file;

if($file != ""){
    $change = mysqli_query($connection,"SELECT * FROM barang WHERE no_barang='$no_barang'");
    $hasil = mysqli_fetch_array($change);
    unlink('../upload/'.$hasil['foto']);

    if($tipe == "image/jpeg" || $tipe == "image/png" || $tipe == "image/avif"){
        if($ukuran <= 1000000){
            if(move_uploaded_file($tmp, $path)){
                 $result = mysqli_query($connection, "UPDATE barang SET nama_barang='$nama_barang', harga='$harga', foto='$file' WHERE no_barang='$no_barang'");

    if($result){
     echo '<script>alert("Berhasil diedit!!")</script>';
      echo '<meta http-equiv="refresh" content="0.2;url=../main/viewbarang.php">';
    }else{
        echo "failed";
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
    
    }else{
    $data = mysqli_query($connection, "UPDATE barang SET nama_barang='$nama_barang', harga='$harga' WHERE no_barang='$no_barang'");

    if($data){
     echo '<script>alert("Berhasil Disimpan!!")</script>';
      echo '<meta http-equiv="refresh" content="0.2;url=../main/viewbarang.php">';
    }else{
        echo "failed";
    }
}



?>
