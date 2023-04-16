<?php
include_once('../config/config.php');

$nama_sales = $_POST['nama_sales'];
$alamat_sales = $_POST['alamat_sales'];
$no_hp = $_POST['no_hp'];

$data = mysqli_query($connection, "INSERT INTO sales(nama_sales,alamat_sales,no_hp) VALUES('$nama_sales','$alamat_sales','$no_hp')");
if($data){
      echo '<script>alert("Berhasil di TAMBAHKAN!!")</script>';
      echo '<meta http-equiv="refresh" content="0.2;url=../main/sales.php">';
}else{
      echo "Gagal";
}
?>