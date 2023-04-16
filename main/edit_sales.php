<?php 
include_once("../config/config.php");
$no_sales = $_GET['id'];
$data = mysqli_query($connection, "SELECT * FROM sales WHERE no_sales='$no_sales'");
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
  <body class="bg-gradient-to-bl from-green-700 to-gray-600">
  <div class="flex items-start justify-start m-7">
        <a href="./viewsales.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Back
        </a>
      </div>
<div class="container " >
   <div class="mt-5 text-sky-500 text-4xl font-bold font-serif text-center">EDIT SALES</div>
    <div class="m-10 grid grid-cols-2 gap-10 font-thin">
    <div class=" ">
    <img class="hover:animate-pulse duration-500 delay-75 border-4  shadow-purple-800 border-amber-200 rounded-xl shadow-2xl " src="https://images.unsplash.com/photo-1560250056-07ba64664864?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c2FsZXN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" >
    </div>
    <div class="text-white ">
<form action="../fungsi/edit_sales.php" method="POST" enctype="multipart/form-data">
    <div class="flex-1">
    <label class="shadow-xl text-xl">Nama Sales</label> 
    <input for="nama_pemilik" value="<?= $hasil['nama_sales']; ?>" type="text" class="px-1 mb-5 w-full mr-4 rounded-lg text-emerald-400 py-1 bg-slate-600"  name="nama_sales"  >
    <input type="text" class="form-control mt-8 " value="<?= $hasil['no_sales'] ?>" hidden name="no_sales" >
  </div>     
    <div class="">
    <label class=" w-full shadow-xl text-xl">Alamat</label> 
    <div class="flex">
    <input id="alamat" for="alamat" value="<?= $hasil['alamat_sales']; ?>" type="text" class="mb-5 w-full rounded-lg text-emerald-400 py-1 px-1 bg-slate-600 " id="rating" name="alamat_sales"  >
    </div>
    </div>     
    <div class="">
    <label class=" w-full shadow-xl text-xl">No HP</label> 
    <div class="flex">
    <input id="alamat" for="alamat" value="<?= $hasil['no_hp']; ?>" type="text" class="w-full mb-5 rounded-lg text-emerald-400 py-1 px-1 bg-slate-600 " id="rating" name="no_hp"  >
    </div>
    </div>     
    <div class="flex items-end justify-end mt-5 ">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Simpan
        </button>
      </div>
    </div>
    </div>
</div>
</form>
</body>