<?php
include_once('../config/config.php');
$no_barang = $_POST['no_barang'];
$nama_gudang = $_POST['nama_gudang'];
$no_faktur = $_POST['no_faktur'];
    
$data = mysqli_query($connection,"INSERT INTO gudang(no_barang,no_faktur,nama_gudang) VALUES('$no_barang','$no_faktur','$nama_gudang')");

if($data){  
    echo '<script>alert("Berhasil di TAMBAHKAN!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../main/faktur.php">';
}else{
    echo "Gagal";
}


?>