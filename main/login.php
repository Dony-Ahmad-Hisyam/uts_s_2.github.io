<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gudang</title>
  <!-- Include Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="/css/input.css">
</head>
<body class="bg-gradient-to-br from-emerald-800 to-green-600">
<div class="container h-screen flex flex-col justify-center items-center w-full ml-16 " >
    <h1 class="uppercase italic md:not-italic text-4xl text-gray-200 font-bold">Login</h1>
    <div class="border-4 border-collapse shadow-2xl shadow-orange-300 border-indigo-500/100 bg-indigo-200 rounded-3xl border-l-gray-500 border-t-red-500 border-b-fuchsia-500 border-r-amber-500 mt-5 w-5/12 ">
  <form action="../fungsi/login.php" method="POST">
    <div class="mt-10 m-4">
    <label for="email" class="form-label">Email</label><br>
    <input type="email" class="form-control px-1  mt-1 rounded-md w-full border-4 border-indigo-500/100" name="email" id="email" aria-describedby="emailHelp"placeholder=" coba@email.com" >
    </div>
    <div class="m-3">
    <label for="password" class="form-label ">Password</label><br>
    <input type="password" class="rounded-md px-1 mt-1 form-control w-full border-4 border-indigo-500/100" name="password" id="password" placeholder=" **** ">
    <div class="rounded-lg mt-2 m-3 container">
      <div class="text-start ">Jika belum punya akun silahkan <a class="text-red-500" href="registrasi.php">registrasi</a> </div>
      <button align="end" id="submit" type="submit" class="rounded-lg border-2 w-20 mt-4 justify-self-end  border-red-700 hover:bg-yellow-200  bg-red-400   "> 
        <div class="m-1 ">Submit</div>
       </button>
    </div>
    </div>
  </form>
</div>
</div>
</body>
</html>