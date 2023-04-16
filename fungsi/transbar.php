<?php
include_once('../config/config.php');

$no_barang = $_POST['no_barang'];
$no_faktur = $_POST['no_faktur'];
$Qty = $_POST['Qty'];

$data = mysqli_query($connection, "INSERT INTO transaksi_barang(no_barang,no_faktur,Qty) VALUES('$no_barang','$no_faktur','$Qty')");
if($data){
      echo '<script>alert("Berhasil di TAMBAHKAN!!")</script>';
      echo '<meta http-equiv="refresh" content="0.2;url=../main/viewtrasbar.php">';
}else{
      echo "Gagal";
}
?>