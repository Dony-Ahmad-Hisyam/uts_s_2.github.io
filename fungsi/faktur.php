<?php
include_once('../config/config.php');
$no_suplier = $_POST['no_suplier'];
$tanggal_kirim = $_POST['tanggal_kirim'];
$tempo = $_POST['tempo'];
    
$data = mysqli_query($connection,"INSERT INTO faktur(no_suplier,tanggal_kirim,tempo) VALUES('$no_suplier','$tanggal_kirim','$tempo')");

if($data){  
    echo '<script>alert("Berhasil di TAMBAHKAN!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../main/faktur.php">';
}else{
    echo "Gagal";
}


?>