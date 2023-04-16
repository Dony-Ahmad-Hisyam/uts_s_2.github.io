<?php 
include_once("../config/config.php");
$no_transaksi = $_GET['id'];

$data_barang = mysqli_query($connection, "SELECT * FROM barang");
$data_faktur = mysqli_query($connection, "SELECT * FROM faktur");
 $data = mysqli_query($connection, "SELECT * FROM transaksi_barang INNER JOIN barang ON transaksi_barang.no_barang = barang.no_barang INNER JOIN faktur ON transaksi_barang.no_faktur = faktur.no_faktur WHERE no_transaksi='$no_transaksi'");
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
        <a href="./viewtrasbar.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Back
        </a>
      </div>
<div class="container " >
   <div class="mt-5 text-sky-500 text-4xl font-bold font-serif text-center">EDIT TRANSAKSI BARANG</div>
    <div class="m-10 grid grid-cols-2 gap-10 font-thin">
    <div class=" ">
    <img class="hover:animate-pulse duration-500 delay-75 border-4  shadow-purple-800 border-amber-200 rounded-xl shadow-2xl " src="https://media.istockphoto.com/id/1174262654/photo/builder-with-a-sales-consultant-at-the-shop-with-heavy-machinery.jpg?b=1&s=170667a&w=0&k=20&c=zQC6T8a-QJ8ySt7rhXFOyoJX6rjThMLzzpIRwUkR1Ss=" >
    </div>
    <div class="text-white ">
<form action="../fungsi/edit_transbar.php" method="POST" enctype="multipart/form-data">
    <div class="flex-1">
    <label class="shadow-xl text-xl">Nama barang</label> 
    <select type="text" class="w-full px-2 py-2 mr-4 rounded-lg text-emerald-400  bg-slate-600 " id="id_produser" name="no_barang" >
        <option value="<?= $result['no_barang']; ?>" disabled selected>Pilih Barang</option>
       <?php foreach($data_barang as $item_barang):   ?>
      <option value="<?= $item_barang['no_barang']; ?>" class="py-2 text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film"> 
       <?= $item_barang['nama_barang']; ?>
       </option>
       <?php endforeach ?>
       </select>
    <input type="text" class="form-control mt-8 " value="<?= $hasil['no_transaksi'] ?>" hidden name="no_transaksi" >
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
    <div class="">
    <label class=" w-full shadow-xl text-xl">Qty</label> 
    <div class="flex">
    <input id="tanggal_kirim" for="tanggal_kirim" value="<?= $hasil['Qty']; ?>" type="text" class="w-full mb-5 rounded-lg text-emerald-400 py-1 px-1 bg-slate-600 " id="rating" name="Qty"  >
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