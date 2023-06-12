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
                        <a href="produk.php" class="block py-2 pl-3 pr-4 text-white bg-green-700 rounded md:bg-transparent md:text-green-700 md:p-0 md:dark:text-green-500">Produk</a>
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

    <section class="m-10 mt-20">
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

    <section class="m-10">
        <div class="flex grid lg:grid-cols-5 gap-4 md:grid-cols-4 sm:grid-cols-2">
            <?php
            $query = "SELECT * FROM detail_obat ORDER BY kategori_obat ASC";
            $result = mysqli_query($mysqli, $query);
            if ($result->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $kd_obat = $row['kd_obat'];
                    $gambarData = $row['gambar'];
                    $nama_obat = $row['nama_obat'];
                    $kategori_obat = $row['kategori_obat'];
                    $deskripsi = $row['deskripsi'];
                    $kemasan = $row['kemasan'];
                    $dosis = $row['dosis'];
                    $efek_samping = $row['efek_samping'];
                    $tgl_expired = $row['tgl_expired'];
                    $stok = $row['stok'];
                    $harga = $row['harga'];
                    // Konversi gambar dari byte menjadi data URL
                    $gambar = 'data:image/jpeg;base64,' . base64_encode($gambarData);
            ?>
                    <div class="w-full m-1 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800    dark:border-gray-700 basis-1/5">
                        <div class="flex grid grid-cols-1">
                            <a href="#">
                                <img class="p-8 rounded-t-lg" src="<?php echo $gambar; ?>" alt="product image" />
                            </a>
                        </div>
                        <div class="px-5 pb-5">

                            <!-- Modal toggle -->
                            <a data-modal-target="staticModal" data-modal-toggle="staticModal" class="block hover:underline font-semibold tracking-tight text-gray-900 rounded-lg text-l" type="button">
                                <?php echo $nama_obat ?>
                            </a>

                            <!-- Main modal -->
                            <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-2xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <?php
                                        $query = "SELECT * FROM detail_obat WHERE kd_obat='$kd_obat'";
                                        ?>
                                        <!-- Modal header -->
                                        <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                <?php 
                                                echo $nama_obat 
                                                ?>
                                            </h3>
                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="staticModal">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-6">
                                            <p class="text-base leading-relaxed text-gray-400">
                                                Kategori: <?php echo $kategori_obat ?>
                                            </p>
                                            <p class="text-base leading-relaxed text-gray-400">
                                                Kemasan: <?php echo $kemasan ?>
                                            </p>
                                            <p class="mt-3 text-base leading-relaxed text-gray-500">
                                                <?php echo $deskripsi ?>
                                            </p>
                                            <p class="mt-3 text-base leading-relaxed text-gray-500">
                                                <?php echo $dosis ?>
                                            </p>
                                            <p class="mt-3 text-base leading-relaxed text-gray-500">
                                                Efek samping: <?php echo $efek_samping ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 gap-4 lg:items-center lg:justify-between md:justify-normal mx-auto">
                                <span class="text-l font-bold text-gray-900 dark:text-white">Rp. <?php echo $harga; ?></span>
                                <a href="" class="text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm m-3 px-2.5 py-2 text-center"><span class="">Beli</span></a>
                            </div>
                        </div>
                    </div>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

</html>