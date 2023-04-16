<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Warehouse</title>
    <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./input.css">
  <style>
    #bg-video {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
  z-index: -1;
  filter: brightness(0.6);
  
    }
  </style>
</head>
  <body class=" bg-emerald-800">
  <nav class="bg-gray-700">
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
                            <a href="../main/login.php" class="tracking-wider text-white bg-red-500 hover:bg-red-800 w-auto ml-72 px-3 py-2 rounded-md text-sm font-medium">Admin</a>
                            <a href="../main/registrasi.php" class="text-white bg-red-500 hover:bg-red-800 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Registrasi</a>
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
            <a href="#" class="text-gray-300 bg-gray-700 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>
            <a href="./gudang.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Gudang</a>
            <a href="./transaksi.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Transaksi Barang</a>
            <a href="./barang.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Barang</a>
            <a href="./data_barang.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Data Barang</a>
            <a href="./faktur.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Faktur</a>
            <a href="./sales.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Sales</a>
     </nav>
  <div class="flex-1">
  <video autoplay muted loop id="bg-video">
  <source src="../Warehouse.mp4" type="video/mp4">
</video>
    <div class="flex flex-wrap justify-center text-center w-full text-2xl mt-32 text-emerald-500">
        <div class="w-1/2 text-3xl font-serif font-bold ">
              Selamat datang di website Warehouse, tempat yang tepat untuk menemukan berbagai macam produk dan perlengkapan yang Anda butuhkan.
        </div>
    </div>
    </div>
</div>
 </body>
  </html>