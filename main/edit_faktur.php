<?php 
include_once("../config/config.php");
$id_faktur = $_GET['id'];
$data_suplier = mysqli_query($connection, "SELECT * FROM suplier");
$data = mysqli_query($connection,"SELECT * FROM faktur JOIN suplier ON suplier.no_suplier = faktur.no_suplier where faktur.no_faktur='$id_faktur'");
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
        <a href="./viewfaktur.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Back
        </a>
      </div>
<div class="container " >
   <div class="mt-5 text-sky-500 text-4xl font-bold font-serif text-center">EDIT FAKTUR</div>
    <div class="m-10 grid grid-cols-2 gap-10 font-thin">
    <div class=" ">
    <img class="hover:animate-pulse duration-500 delay-75 border-4  shadow-purple-800 border-amber-200 rounded-xl shadow-2xl " src="https://media.istockphoto.com/id/1344217043/photo/electric-bill-statement-and-home-energy-consumption.jpg?b=1&s=170667a&w=0&k=20&c=0HrN_L88mp7-wC9JppxHzSQtY6DFGLf5FV6k6SwG0nk=" >
    </div>
    <div class="text-white ">
<form action="../fungsi/edit_faktur.php" method="POST" enctype="multipart/form-data">
    <div class="flex-1">
    <label class="shadow-xl text-xl">Nama Suplier</label> 
    <select type="text" class="w-full py-2 mb-5 mr-4 rounded-lg text-emerald-400  bg-slate-600 " id="id_produser" name="no_suplier"  >
        <option value="<?= $hasil['no_suplier']; ?>" disabled selected><?= $hasil['nama_suplier']; ?> 
         (Pilih Suplier) </option>
       <?php foreach($data_suplier as $item_suplier):   ?>
      <option value="<?= $item_suplier['no_suplier']; ?>" class="py-2 text-amber-300 bg-slate-500 rounded-md shadow-xl" placeholder="Judul Film"> 
       <?= $item_suplier['nama_suplier']; ?>
       </option>
       <?php endforeach ?>
    </select>
    <input type="text" class="form-control mt-8 mb-5" value="<?= $hasil['no_faktur'] ?>" hidden name="no_faktur" >
  </div>     
    <div class="">
    <label class=" w-full shadow-xl text-xl mt-5">Tanggal Kirim</label> 
    <div class="flex">
    <input id="alamat" for="alamat" value="<?= $hasil['tanggal_kirim']; ?>" type="date" class="mb-5 w-full rounded-lg text-emerald-400 py-1 px-1 bg-slate-600 " id="rating" name="tanggal_kirim"  >
    </div>
    </div>     
    <div class="">
    <label class=" w-full shadow-xl text-xl">Tempo</label> 
    <div class="flex">
    <input id="alamat" for="alamat" value="<?= $hasil['tempo']; ?>" type="date" class="w-full mb-5 rounded-lg text-emerald-400 py-1 px-1 bg-slate-600 " id="rating" name="tempo"  >
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