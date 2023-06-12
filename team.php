<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="assets/img/logo.png" rel="icon">
  <title>ApoTech - Beranda</title>
</head>

<body>

  <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="#" class="flex items-center">
        <img src="assets/img/logo_transparan.png" class="h-8 mr-3" alt="Apotech">
        <span class="self-center text-2xl font-bold text-green-500 whitespace-nowrap dark:text-white">Apotech</span>
      </a>
      <div class="flex md:order-2">
        <a href="login.php">
          <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Masuk</button></a>
        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
        <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="index.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Beranda</a>
          </li>
          <li>
            <a href="produk.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Produk</a>
          </li>
          <li>
            <a href="team.php" class="block py-2 pl-3 pr-4 text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 md:dark:text-green-500">Tim Kami</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class=" mx-10 my-10">
    <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6 ">
      <div class="max-w-screen-sm mx-auto mb-8 text-center lg:mb-16">
        <h2 class="mb-4 text-4xl font-bold tracking-tight text-gray-900">Tim Kami</h2>
        <p class="font-normal text-gray-500 lg:mb-16 sm:text-xl">Yuk lihat siapa dibalik pengembang aplikasi Apotech!</p>
      </div>
      <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
        <div class="items-center rounded-lg shadow bg-gray-50 sm:flex">
          <div class="p-5">
            <h3 class="text-xl font-bold tracking-tight text-gray-900">
              <a href="#">Chalvaria Tempoh</a>
            </h3>
            <span class="text-gray-500">Scrum Master</span>
            <p class="mt-3 mb-4 font-light text-gray-500">Mahasiswa SI, Universitas Sam Ratulangi Angkatan 2021</p>
          </div>
        </div>
        <div class="items-center rounded-lg shadow bg-gray-50 sm:flex">
          <div class="p-5">
            <h3 class="text-xl font-bold tracking-tight text-gray-900">
              <a href="#">Gloria Djuangalenge</a>
            </h3>
            <span class="text-gray-500">UI/UX Designer</span>
            <p class="mt-3 mb-4 font-light text-gray-500">Mahasiswa SI, Universitas Sam Ratulangi Angkatan 2021</p>
          </div>
        </div>
        <div class="items-center rounded-lg shadow bg-gray-50 sm:flex">
          <div class="p-5">
            <h3 class="text-xl font-bold tracking-tight text-gray-900">
              <a href="#">Vallerie B. Sepang</a>
            </h3>
            <span class="text-gray-500">Web Developer</span>
            <p class="mt-3 mb-4 font-light text-gray-500">Mahasiswa SI, Universitas Sam Ratulangi Angkatan 2021</p>
          </div>
        </div>
        <div class="items-center rounded-lg shadow bg-gray-50 sm:flex">
          <div class="p-5">
            <h3 class="text-xl font-bold tracking-tight text-gray-900">
              <a href="#">Giveanna Terok</a>
            </h3>
            <span class="text-gray-500">Web Developer</span>
            <p class="mt-3 mb-4 font-light text-gray-500">Mahasiswa SI, Universitas Sam Ratulangi Angkatan 2021</p>
          </div>
        </div>
        <div class="items-center rounded-lg shadow bg-gray-50 sm:flex">
          <div class="p-5">
            <h3 class="text-xl font-bold tracking-tight text-gray-900">
              <a href="#">Elisabet Lambiju</a>
            </h3>
            <span class="text-gray-500">Data Engineer</span>
            <p class="mt-3 mb-4 font-light text-gray-500">Mahasiswa SI, Universitas Sam Ratulangi Angkatan 2021</p>
          </div>
        </div>
      </div>
    </div>

  </section>


  <footer class="bg-slate-50 dark:bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl p-20 py-6 lg:py-8">
      <div class="md:flex md:justify-between">
        <div class="mb-6 md:mb-0">
          <a href="#" class="flex items-center">
            <img src="assets/img/logo.png" class="h-8 mr-3" alt="Apotech" />
            <span class="self-center text-2xl font-bold text-green-500 whitespace-nowrap dark:text-white">Apotech</span>
          </a>
        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
          <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Tautan</h2>
            <ul class="text-gray-600 dark:text-gray-400 font-medium">
              <li class="mb-4">
                <a href="admin/login.php" class="hover:underline">Apotech Admin</a>
              </li>
              <li class="mb-4">
                <a href="team.php" class="hover:underline">Tim Kami</a>
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

</body>

</html>