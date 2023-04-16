<?php
include_once("../config/config.php");
$no_gudang = $_POST['no_gudang'];
$no_faktur = $_POST['no_faktur'];
$no_barang = $_POST['no_barang'];
    
    $result = mysqli_query($connection, "UPDATE gudang SET no_gudang='$no_gudang', no_faktur='$no_faktur', no_barang='$no_barang' WHERE no_gudang='$no_gudang'");
    if($result){
    echo '<script>alert("Berhasil DIEDIT!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../main/viewgudang.php">';
    }else{
        echo "failed";
    }        

?>
