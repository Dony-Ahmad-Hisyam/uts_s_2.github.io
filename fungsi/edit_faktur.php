<?php
include_once("../config/config.php");
$no_suplier = $_POST['no_suplier'];
$tanggal_kirim = $_POST['tanggal_kirim'];
$tempo = $_POST['tempo'];
$no_faktur = $_POST['no_faktur'];
    
    $result = mysqli_query($connection, "UPDATE faktur SET no_suplier='$no_suplier', tanggal_kirim='$tanggal_kirim', tempo='$tempo' WHERE no_faktur='$no_faktur'");
    if($result){
    echo '<script>alert("Berhasil DIEDIT!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../main/viewfaktur.php">';
    }else{
        echo "failed";
    }        

?>
