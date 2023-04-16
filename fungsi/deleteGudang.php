<?php
include_once("../config/config.php");
$no_gudang = $_GET['id'];

$data = mysqli_query($connection, "DELETE FROM gudang WHERE no_gudang='$no_gudang'");

if($data){
    header("location: ../main/viewgudang.php");
}else{
    echo"Failed";
}
?>