<?php
include_once("../config/config.php");
$nama_sales = $_POST['nama_sales'];
$alamat_sales = $_POST['alamat_sales'];
$no_sales = $_POST['no_sales'];
$no_hp = $_POST['no_hp'];
    
    $result = mysqli_query($connection, "UPDATE sales SET nama_sales='$nama_sales', no_hp='$no_hp', alamat_sales='$alamat_sales' WHERE no_sales='$no_sales'");
    if($result){
    echo '<script>alert("Berhasil DIEDIT!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../main/viewsales.php">';
    }else{
        echo "failed";
    }        

?>
