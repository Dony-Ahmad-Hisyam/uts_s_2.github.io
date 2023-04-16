<?php

session_start();
$_SESSION['no_suplier']='';
$_SESSION['nama_suplier']='';
$_SESSION['email']='';
$_SESSION['password']='';

unset($_SESSION['no_suplier']);
unset($_SESSION['nama_suplier']);
unset($_SESSION['email']);
unset($_SESSION['password']);

session_unset();
session_destroy();
header('Location: ../main/login.php');


?>