<?php
include_once("../config/config.php");
$no_sales = $_GET['id'];

$data = mysqli_query($connection, "DELETE FROM sales WHERE no_sales='$no_sales'");

if($data){
    echo '<script>alert("Berhasil diDELETE!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../main/viewsales.php">';
}else{
    echo"Failed";
}
?>