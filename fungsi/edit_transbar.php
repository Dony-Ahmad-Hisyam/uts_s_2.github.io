<?php
include_once("../config/config.php");

$no_barang = $_POST['no_barang'];
$no_faktur = $_POST['no_faktur'];
$no_transaksi = $_POST['no_transaksi'];
$Qty = $_POST['Qty'];
    
    $result = mysqli_query($connection, "UPDATE transaksi_barang SET no_barang='$no_barang', Qty='$Qty', no_faktur='$no_faktur' WHERE no_transaksi='$no_transaksi'");
    if($result){
    echo '<script>alert("Berhasil DIEDIT!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../main/viewtrasbar.php">';
    }else{
        echo "failed";
    }        

?>
