<?php
include_once("../config/config.php");
$no_faktur = $_GET['id'];

$data = mysqli_query($connection, "DELETE FROM faktur WHERE no_faktur='$no_faktur'");

if($data){
    echo '<script>alert("Berhasil DIDELETE!!")</script>';
    echo '<meta http-equiv="refresh" content="0.2;url=../main/viewfaktur.php">';
}else{
    echo"Failed";
}
?>