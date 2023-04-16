<?php
include_once("../config/config.php");
$no_barang = $_GET['id'];

$data = mysqli_query($connection, "DELETE FROM barang WHERE no_barang='$no_barang'");

if($data){
    header("location: ../main/viewbarang.php");
}else{
    echo"Failed";
}
?>