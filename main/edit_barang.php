<?php 
include_once("../config/config.php");
$no_barang = $_GET['id'];
$data = mysqli_query($connection, "SELECT * FROM barang WHERE no_barang='$no_barang'");
$hasil = mysqli_fetch_array($data);
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>EDIT | WAREHOUSE</title>
  <link rel="stylesheet" href="./input.css">
  </head>
  <body class="bg-gradient-to-bl from-amber-700 to-sky-600">
  <div class="flex items-start justify-start m-7">
        <a href="./viewbarang.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Back
        </a>
      </div>
<div class="container " >
   <div class="mt-5 text-sky-500 text-4xl font-bold font-serif text-center">EDIT BARANG</div>
    <div class="m-10 grid grid-cols-2 gap-10 font-thin">
    <div class=" ">
    <img class="hover:animate-pulse duration-500 delay-75 border-4  shadow-purple-800 border-amber-200 rounded-xl shadow-2xl " src="https://media.istockphoto.com/id/1299083810/photo/parcels-on-conveyor-belt-in-a-warehouse.jpg?b=1&s=170667a&w=0&k=20&c=gcKD93K_UvTRyb1zZ0OFAWOWjF9pvCpuxwjmk0k1kAQ=" >
    </div>
    <div class="text-white ">
<form action="../fungsi/edit_barang.php" method="POST" enctype="multipart/form-data">
    <div class="flex-1"> 
    <div class="">
    <label class="shadow-xl text-xl">Nama barang</label> 
    <input for="nama_pemilik" value="<?= $hasil['nama_barang']; ?>" type="text" class="px-1 w-full mr-4 rounded-lg text-emerald-400 py-1 bg-slate-600"  name="nama_barang"  >
    <input type="text" class="form-control mt-8 " value="<?= $hasil['no_barang'] ?>" hidden name="no_barang" >
      </div>
    <div class="mt-5">
    <label class=" text-xl">Foto Barang</label> 
    <div class="w-full flex justify-center items-center ">
      <img id="preview"  class="h-24 w-24 border rounded border-black" alt="Foto ">
  </div>
    <input type="file" name="foto" value="<?= $hasil['foto']; ?>" class="mt-7 mb-5 w-full rounded-md bg-slate-600" id="" onchange="previewImage(event)"> 
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
    </div>
    
  </div>     
    <div class="">
    <label class=" w-full shadow-xl text-xl">Harga</label> 
    <div class="flex">
    <input id="alamat" for="alamat" value="<?= $hasil['harga']; ?>" type="text" class="w-full rounded-lg text-emerald-400 py-1 px-1 bg-slate-600 " id="rating" name="harga"  >
    </div>
    </div>     
    <div class="flex items-end justify-end mt-5 ">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Simpan
        </button>
      </div>
    </div>
    </div>
</form>
</body>