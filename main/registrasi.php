<?php
include_once("../config/config.php");
$data = mysqli_query($connection, "SELECT * FROM suplier")

?>

<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./input.css">
    </head>
    <body class="bg-gradient-to-br from-emerald-800 to-green-600">
    <div class="container " >
  <div class="mt-8 text-yellow-500 text-5xl font-bold font-serif text-center">Tambah Suplier</div>
  <div class="m-10 grid gap-10 justify-center items-center">
  <div class=" shadow-purple-800 items-center flex justify-center">
  </div>
  <div class="text-white h-screen">
<form action="../fungsi/registrasi.php" method="POST" enctype="multipart/form-data">
  <div class="text-start flex-col flex">
  
  <label class="mb-2 ">Masukan Foto  : </label> 
  <div class="w-full flex justify-center items-center ">
      <img id="preview" class="mr-8 h-48 w-48 border rounded-full border-black" alt="Foto ">
  </div>
  <div class="flex flex-wrap justify-center ">
   <input type="file" name="foto" class="mt-7 px-1 mb-5" id="" onchange="previewImage(event)"> 
  </div>
<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var preview = document.getElementById('preview');
            preview.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
        <label class="flex-col">Nama Suplier : </label>
        <input type="text" class="w-auto mb-5 px-1 text-black rounded-md " name="nama_suplier" placeholder="  Sholeh" >
        <label class="">Email : </label>
        <input type="email" class="w-auto px-1 mb-5 text-black rounded-md " name="email" placeholder="  #@gmail.com" >
        <label class="">Password : </label>
        <input type="password" class="w-auto px-1 mb-5 text-black rounded-md " name="password" placeholder="  ****">
        <div class="grid grid-cols-2 gap-96">
           <button type="submit" class="w-20 justify-end border-blue-100 items-end flex-auto bg-green-400 transition ease-in-out shadow-xl text-white hover:bg-blue-200 hover:text-black delay-150 mt-5 rounded-lg ">
  <div class="m-1">Tambah</div> 
  </button> 
  <a class="w-20 justify-end border-blue-100 items-end flex-auto bg-blue-600 transition ease-in-out shadow-xl text-white hover:bg-yellow-500 hover:text-black delay-150 mt-5 rounded-lg" href="login.php">
  <div class="m-2 ml-4">Login</div> 
  </a>   
        </div>
  </div> 
  </div>
  </div>
</form>
</div>
    </body>
</html>