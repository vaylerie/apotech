<?php
session_start();
include('config.php'); // file koneksi ke database

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['username']) && isset($_POST['nama'])) {
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $username = $_POST['username'];
  $nama = $_POST['nama'];

  // cek apakah username sudah ada di database
  $query = "SELECT * FROM login WHERE username='$username'";
  $result = mysqli_query($mysqli, $query);

  if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Username sudah digunakan. Silakan gunakan username lain.'); document.location.href = 'register.php'</script>";
    exit();
  } else if (empty($email) || empty($password)) {
    echo "<script>alert('Email dan password tidak boleh kosong!'); document.location.href = 'register.php'</script>";
    exit();
  } else {
    $query = "INSERT INTO login (username, email, password, nama) VALUES ('$username','$email','$password', '$nama')";
    mysqli_query($mysqli, $query);
    echo "<script>alert('User baru berhasil ditambahkan!'); document.location.href = 'login.php'</script>";
  }
}

//tutup koneksi ke database
mysqli_close($mysqli);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="assets/img/logo.png" rel="icon">
  <title>ApoTech - Daftar</title>
</head>

<body>
  <section class="bg-neutral-100 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
        <img class="w-8 h-8 mr-2" src="assets/img/logo_transparan.png" alt="logo">
        <p class="text-green-500 font-bold">Apotech</p>
      </a>
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-green-950 dark:border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
          <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
            Daftar
          </h1>
          <form class="space-y-4 md:space-y-6" action="register.php" method="POST">
            <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
              <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@domain.com" required="">
            </div>
            <div>
              <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
              <input type="nama" name="nama" id="nama" placeholder="nama" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>
            <div>
              <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
              <input type="username" name="username" id="username" placeholder="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>
            <div>
              <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
              <input type="password" name="password" id="password" placeholder="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>
            <button type="submit" class="w-full text-white bg-green-500 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" name="login">Daftar</button>
            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
              Sudah punya Akun? <a href="login.php" class="font-medium text-green-600 hover:underline dark:text-primary-500">Login </a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </section>

</body>
</html>