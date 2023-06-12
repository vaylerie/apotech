<?php
include('config.php'); // file koneksi ke database
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
  <link href="/apotech/assets/img/logo.png" rel="icon">
  <title>ApoTech - Beranda</title>
</head>

<body>

<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="#" class="flex items-center">
      <img src="/apotech/assets/img/logo_transparan.png" class="h-8 mr-3" alt="Apotech">
      <span class="self-center text-2xl font-bold text-green-500 whitespace-nowrap dark:text-white">Apotech</span>
  </a>
  <div class="flex md:order-2">
  <a href="/apotech/logout.php">    
  <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Keluar</button></a>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="index.php" class="block py-2 pl-3 pr-4 text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 md:dark:text-green-500" aria-current="page">Beranda</a>
      </li>
      <li>
        <a href="produk.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Produk</a>
      </li>
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Keranjang</a>
      </li>
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pembelian</a>
      </li>
      <li>
        <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Profil</a>
      </li>
    </ul>
  </div>
  </div>
</nav>


  <section class="bg-cover bg-no-repeat bg-[url('/apotech/assets/img/dashboard.jpg')] bg-gray-700 bg-blend-multiply mb-10">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
      <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Selamat Datang di Apo<span class="text-green-400">Tech</span></h1>
      <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Kesehatan Anda, Prioritas Kami - Beli Obat dengan Mudah di Apotech</p>
    </div>
  </section>

  <section class="m-10">
        <h2 class="text-center pb-8 text-2xl font-bold">Kategori</h2>
        <div class="flex grid lg:grid-cols-5 gap-4 md:grid-cols-4 sm:grid-cols-2">
            <?php
            $query = "SELECT * FROM kategori_obat ORDER BY nama_kategori ASC";
            $result = mysqli_query($mysqli, $query);
            if ($result->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $kd_kategori = $row['kd_kategori'];
                    $nama_kategori = $row['nama_kategori'];
            ?>
                    <button class="m-1 h-full flex max-w-sm bg-white border border-gray-200 rounded-lg shadow hover:bg-neutral-100 dark:bg-gray-800  dark:border-gray-700" href="#">
                        <div class="flex pl-3">
                            <img class="m-3 pb-1 flex object-contain object-left" src="/apotech/assets/img/img_obat.png" alt="kategori-1" />
                            <h5 class="text-xl flex pt-6 pb-3 font-semibold tracking-tight text-gray-900 dark:text-white"><?php echo $nama_kategori ?></h5>
                        </div>
                    </button>
                <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="12" class="px-6 py-4 text-gray-500">Tidak ada Data Produk.</td>
                </tr>
            <?php
            }
            ?>
        </div>
    </section>
  <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

  <section>
    <div
      class="container flex flex-col justify-center p-12 mx-auto sm:p-24 sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
      <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
        <img src="/apotech/assets/img/43071.jpg" alt="" class="object-contain h-72 sm:h-80 lg:h-[650px]">
      </div>
      <div class="flex flex-col justify-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left">
        <h1 class="text-5xl font-bold leading-none sm:text-6xl">Tentang Kami
        </h1>
        <p class="mt-6 mb-8 text-lg">Aplikasi apotek online yang memberikan kemudahan, kecepatan, dan keamanan dalam memesan obat dan produk kesehatan.
        </p>
        <p class="mb-8 text-lg">
        Dapatkan informasi lengkap produk, pesan dengan mudah, dan nikmati pengiriman cepat. Fitur pencarian dan rekomendasi membantu Anda menemukan apa yang Anda butuhkan. Tim layanan pelanggan kami siap memberikan bantuan profesional.
        </p>
      </div>
    </div>
  </section>


  <footer class="bg-slate-50 dark:bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl p-20 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
              <a href="#" class="flex items-center">
                  <img src="/apotech/assets/img/logo.png" class="h-8 mr-3" alt="Apotech" />
                  <span class="self-center text-2xl font-bold text-green-500 whitespace-nowrap dark:text-white">Apotech</span>
              </a>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Tautan</h2>
                  <ul class="text-gray-600 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="/apotech/admin/login.php" class="hover:underline">Apotech Admin</a>
                      </li>
                      <li class="mb-4">
                          <a href="#" class="hover:underline">Tim Kami</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Hubungi</h2>
                  <ul class="text-gray-600 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="#" class="hover:underline ">012345678</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline">Manado, Indonesia</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#" class="hover:underline">Apotech™</a>. Kelompok 5 RPL Kelas A.
          </span>
      </div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

</html>