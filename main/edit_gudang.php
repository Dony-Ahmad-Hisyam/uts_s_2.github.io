<?php 
include_once("../config/config.php");
$id_gudang = $_GET['id'];
$data_barang = mysqli_query($connection, "SELECT * FROM barang");
$data_faktur = mysqli_query($connection, "SELECT * FROM faktur");
$data = mysqli_query($connection,"SELECT * FROM gudang INNER JOIN barang ON gudang.no_barang = barang.no_barang INNER JOIN faktur ON gudang.no_faktur = faktur.no_faktur 
where gudang.no_gudang='$id_gudang'");
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
        <a href="./viewgudang.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Back
        </a>
      </div>
<div class="container " >
   <div class="mt-5 text-sky-500 text-4xl font-bold font-serif text-center">EDIT GUDANG</div>
    <div class="m-10 grid grid-cols-2 gap-10 font-thin">
    <div class=" ">
    <img class="hover:animate-pulse duration-500 delay-75 border-4  shadow-purple-800 border-amber-200 rounded-xl shadow-2xl " src="https://media.istockphoto.com/id/1372699045/photo/storage-owner-with-tablet-in-hands-showing-around-storage-to-his-partner.jpg?b=1&s=170667a&w=0&k=20&c=GJc9mZQLVtoNe58h3Kae3e69PjdX4QcFrb_8NxJSiag=" >
    </div>
    <div class="text-white ">
<form action="../fungsi/edit_gudang.php" method="POST" enctype="multipart/form-data">
    <div class="flex-1">
    <label class="shadow-xl text-xl">Nama gudang</label>
    <input value="<?= $hasil['nama_gudang']; ?> "class="appearance-none  rounded w-full py-2 px-3 bg-slate-600 text-emerald-400 leading-tight focus:outline-none focus:shadow-outline" id="harga" name="nama_gudang" type="text" placeholder="Nama Gudang">

    <input type="text" class="form-control mt-8 mb-5" value="<?= $hasil['no_gudang'] ?>" hidden name="no_gudang" >
  </div>     
  <div class="flex-1">
    <label class="shadow-xl text-xl">Nama barang</label> 
    <select type="text" class="w-full py-2 mb-5 mr-4 rounded-lg text-emerald-400  bg-slate-600 " id="id_produser" name="no_barang"  >
        <option value="<?= $hasil['no_barang']; ?>" disabled selected><?= $hasil['nama_barang']; ?></option>
       <?php foreach($data_barang as $item_barang):   ?>
      <option value="<?= $item_barang['no_barang']; ?>" class="py-2 text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film"> 
       <?= $item_barang['nama_barang']; ?>
       </option>
       <?php endforeach ?>
    </select>
  </div>     
  <div class="flex-1">
    <label class="shadow-xl text-xl">Tanggal Kirim</label> 
    <select type="text" class="w-full py-2 mb-5 mr-4 rounded-lg text-emerald-400  bg-slate-600 " id="id_produser" name="no_faktur"  >
        <option value="<?= $hasil['no_faktur']; ?>" disabled selected><?= $hasil['tanggal_kirim']; ?></option>
       <?php foreach($data_faktur as $item_faktur):   ?>
      <option value="<?= $item_faktur['no_faktur']; ?>" class="py-2 text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film"> 
       <?= $item_faktur['tanggal_kirim']; ?>
       </option>
       <?php endforeach ?>
    </select>
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