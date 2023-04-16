<?php
session_start();
if(!isset($_SESSION["email"])){
    echo "Access Denied";
    exit;
}
$id=$_SESSION["no_suplier"];
$nama=$_SESSION["nama_suplier"];
$email=$_SESSION["email"];
$foto=$_SESSION["foto"];



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barang || Warehouse</title>
    <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./input.css">
</head>
  <body class=" bg-emerald-800">
  <nav class="bg-purple-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0" >
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg"  fill="#FFFFFF" class="bi w-12 h-9 m-0 bi-house-gear-fill " viewBox="0 0 16 16">
  <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5Z"/>
  <path d="M11.07 9.047a1.5 1.5 0 0 0-1.742.26l-.02.021a1.5 1.5 0 0 0-.261 1.742 1.5 1.5 0 0 0 0 2.86 1.504 1.504 0 0 0-.12 1.07H3.5A1.5 1.5 0 0 1 2 13.5V9.293l6-6 4.724 4.724a1.5 1.5 0 0 0-1.654 1.03Z"/>
  <path d="m13.158 9.608-.043-.148c-.181-.613-1.049-.613-1.23 0l-.043.148a.64.64 0 0 1-.921.382l-.136-.074c-.561-.306-1.175.308-.87.869l.075.136a.64.64 0 0 1-.382.92l-.148.045c-.613.18-.613 1.048 0 1.229l.148.043a.64.64 0 0 1 .382.921l-.074.136c-.306.561.308 1.175.869.87l.136-.075a.64.64 0 0 1 .92.382l.045.149c.18.612 1.048.612 1.229 0l.043-.15a.64.64 0 0 1 .921-.38l.136.074c.561.305 1.175-.309.87-.87l-.075-.136a.64.64 0 0 1 .382-.92l.149-.044c.612-.181.612-1.049 0-1.23l-.15-.043a.64.64 0 0 1-.38-.921l.074-.136c.305-.561-.309-1.175-.87-.87l-.136.075a.64.64 0 0 1-.92-.382ZM12.5 14a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3Z"/>
</svg>
                        </a>
                    </div>
                    <div class="hidden md:block ">
                        <div class="ml-96 flex justify-end items-end space-x-6 w-full">
                            <a align="end" class="tracking-wider w-80 ml-10 px-3 py-2 rounded-md text-sm font-medium text-white"><?= $email; ?></a>
                            <a href="../fungsi/logout.php" class="text-white bg-red-500 hover:bg-red-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</nav>

<!-- Navbar on the side -->
<div class="h-screen flex">
<nav class="w-1/5 bg-emerald-700 overflow-y-scroll">
    <!-- Isi navbar di sini -->
            <a href="./index.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>
            <a href="./gudang.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Gudang</a>
            <a href="./barang.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Input Barang</a>
            <a href="./faktur.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Input Faktur</a>
            <a href="./sales.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Input Sales</a>
            <a href="./input_transbar.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Input Transaksi Barang</a>
            <a href="./viewtrasbar.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Costum Transaksi Barang</a>
            <a href="#" class=" bg-gray-700 text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Data Barang</a>
            <a href="./viewgudang.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Costume Gudang</a>
            <a href="../main/viewbarang.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Costum Barang</a>
            <a href="./viewfaktur.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Costum Faktur</a>
            <a href="./viewsales.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Costum Sales</a>
  </nav>
  <div class="w-full flex-1 shadow-xl rounded-3xl text-gray-300">
    <div class=" text-center pt-5 font-serif font-bold text-3xl ">Data Transaksi Barang</div>
    <div class="text-center m-4 ">
    <table align="center" class="w-full justify-center shadow-xl mt-3  shadow-slate-800 bg-gray-700 rounded-xl" >
    <thead class="border-b-4 border-emerald-300"> 
    <tr>
      <div class="">
      <th scope="col">
      <div class="ml-2 ">No.</div>
      </th>
      <th scope="col">
      <div>Nama Barang</div>
      </th>
      <th scope="col">
      <div>Harga</div>
      </th>
      <th scope="col">
      <div>Foto</div>
      </th>
      <th scope="col">
      <div>Tanggal Kirim</div>
      </th>
      <th scope="col">
      <div>Tempo</div>
      </th>
    </div></tr>
  </thead>
  
  <tbody>
  <?php
    include_once("../config/config.php");
    $data_barang = mysqli_query($connection, "SELECT * FROM barang");
    $data_faktur = mysqli_query($connection, "SELECT * FROM faktur");
    $no=1; 
    $total=0;
    
    foreach ($data_barang as $item ):
      $total += $item['harga'];
      $result = mysqli_fetch_array($data_faktur);
    ?>
    <tr>
      <th scope="col">
        <div class="ml-2"> <?= $no++; ?>
        </div></th>
        <th scope="col">
        <div class=" w-full "> <?= $item['nama_barang']  ?>
        </div></th>
        <th scope="col">
        <div class=" w-full "> <?= $item['harga']  ?>
        </div></th>
        <th scope="col">
        <div class=" w-full flex justify-center items-center"> <img class="w-36 h-36 mt-2 rounded-md " src="../upload/<?php echo $item['foto']; ?> ">
        </div></th>
        <th scope="col">
        <div class=" w-full "> <?= $result['tanggal_kirim']  ?>
        </div></th>
        <th scope="col">
        <div class=" w-full "> <?= $result['tempo']  ?>
        </div></th>
        </tr>
       
        <?php endforeach ?>
  </tbody>
  </table>
  </div>
  <br>
  <div class="flex justify-end mr-9 text-white w-auto text-lg ">
    <div class=" rounded-lg bg-green-400 border-2 border-gray-700 ">
      <div class="m-3 text-gray-600 text-2xl font-bold">
        Total : Rp. <?php echo $total; ?> 
      </div> 
    </div>
  </div>
  
  </div> 
</div>
 </body>
  </html>