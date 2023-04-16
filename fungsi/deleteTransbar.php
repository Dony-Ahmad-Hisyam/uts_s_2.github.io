<?php
include_once("../config/config.php");
$no_transaksi= $_GET['id'];

$data = mysqli_query($connection, "DELETE FROM transaksi_barang WHERE no_transaksi='$no_transaksi'");

if($data){
    header("location: ../main/viewtrasbar.php");
}else{
    echo"Failed";
}
?>