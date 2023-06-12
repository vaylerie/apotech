<?php 
  session_start();
  include('config.php'); // file koneksi ke database
  if (isset($_POST['username']) && isset($_POST['password'])) {
    // ambil data dari form login
    $username = $_POST['username'];
    $password = md5($_POST['password']);  
    // cek kecocokan username dan password di database
    $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    $result = mysqli_query($mysqli, $query);
    if (mysqli_num_rows($result) == 1) {
      // jika cocok, buat session dan redirect ke halaman dashboard
      $_SESSION['username'] = $username;
      header('location: user/index.php');
    } else {
      // jika tidak cocok, tampilkan pesan error
      $error_msg = "Username atau password salah!";
    }
  }
  if (isset($_SESSION['username'])) {
    // jika sudah login, redirect ke halaman dashboard
    header('location: user/index.php');
  }
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apotech - LogIn</title>
  <link href="assets/img/logo.png" rel="icon">
  <script src="https://cdn.tailwindcss.com"></script>
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
            Masuk ke akun Anda
          </h1>
          <?php if (isset($error_msg)) {
                echo '<p style="color:red">'.$error_msg.'</p>';
                }
              ?>
          <form class="space-y-4 md:space-y-6" action="login.php" method="POST">
            <div>
              <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
              <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Username" required="">
            </div>
            <div>
              <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
              <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
            </div>
            <div class="flex items-center justify-between">
              <div class="flex items-start">
                <div class="flex items-center h-5">
                  <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                </div>
                <div class="ml-3 text-sm">
                  <label for="remember" class="text-gray-500 dark:text-gray-300">Ingat saya</label>
                </div>
              </div>
              <a href="#" class="text-sm font-medium text-green-600 hover:underline dark:text-green-500">Lupa password?</a>
            </div>
            <button type="submit" class="w-full text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" name="login">Masuk</button>
            <div class="flex items-center justify-between">
            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
              Belum punya akun? <a href="register.php" class="font-medium text-green-600 hover:underline dark:text-green-500">Daftar</a>
            </p>
            <p class="text-xs font-light text-gray-500 dark:text-gray-400">
              atau <a href="admin/login.php" class="font-medium text-green-600 hover:underline dark:text-green-500">masuk sebagai admin</a>
            </p>
              </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>

</html>