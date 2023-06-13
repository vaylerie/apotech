<?php
session_start();
include('config.php'); // file koneksi ke database

if (isset($_POST['username']) && isset($_POST['nama']) && isset($_POST['password']) && isset($_POST['email'])) {
   $username = $_POST['username'];
   $nama = $_POST['nama'];
   $email = $_POST['email'];
   $password = md5($_POST['password']);

   // cek apakah username sudah ada di database
   $query = "SELECT * FROM admin WHERE username='$username'";
   $result = mysqli_query($mysqli, $query);

   if (mysqli_num_rows($result) > 0) {
      echo "<script>alert('Username telah tersedia. Silakan masukkan username lain.'); document.location.href = '/apotech/admin/karyawan.php'</script>";
      exit();
   } else {
      $insert = "INSERT INTO admin (username, nama, email, password) VALUES ('$username', '$nama', '$email', '$password')";
      mysqli_query($mysqli, $insert);
      echo "<script>alert('Data karyawan baru berhasil ditambahkan!'); document.location.href = '/apotech/admin/karyawan.php'</script>";
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.tailwindcss.com"></script>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
   <link href="/apotech_rpl/img/logo.png" rel="icon">
   <title>ApoTech - Admin Panel</title>
</head>

<body>

   <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
      <span class="sr-only">Buka</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
         <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
      </svg>
   </button>

   <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
      <div class="h-full px-3 py-4 overflow-y-auto bg-slate-50 dark:bg-gray-800">
         <a href="#" class="flex items-center pl-2.5 mb-5">
            <img src="/apotech_rpl/img/logo_transparan.png" class="h-6 mr-3 sm:h-7" alt="Apotech Logo" />
            <span class="self-center text-xl text-green-600 font-bold whitespace-nowrap dark:text-white">Apotech</span>
         </a>
         <ul class="space-y-2 font-medium">
            <li>
               <a href="index.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                  <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                     <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                  </svg>
                  <span class="ml-3">Menu Utama</span>
               </a>
            </li>
            <li>
               <a href="daftar_produk.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                  <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap">Daftar Produk</span>
               </a>
            </li>
            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                  <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"></path>
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap">Penjualan</span>
               </a>
            </li>
            <li>
               <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                  <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path>
                     <path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path>
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap">Pesan</span>
                  <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
               </a>
            </li>
            <li>
               <a href="pengguna.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                  <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap">Pengguna</span>
               </a>
            </li>
            <li>
               <a href="karyawan.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                  <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap">Karyawan</span>
               </a>
            </li>
            <li>
               <a href="/apotech/logout.php" type="button" class="flex items-center p-2 text-red-800 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                  <svg fill="none" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"></path>
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap">Keluar</span>
               </a>
            </li>
         </ul>
      </div>
   </aside>

   <div class="p-4 sm:ml-64">
      <div class="p-4">
         <h1 class="mb-10 text-2xl font-semibold leading-none tracking-tight text-black md:text-3xl lg:text-4xl">
            Data Karyawan</h1>
         <div class="p-4 border-2 border-gray-200 rounded-lg">
            <div class="flex justify-between items-center">
               <h4 class="mb-10 text-xl font-medium leading-none mr-2 mb-2 px-5 py-2.5 tracking-tight text-black">Tabel Daftar Karyawan</h4>

               <!-- Modal toggle -->
               <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block text-green-600 bg-slate-50 hover:text-green-700 border border-gray-100 rounded-lg text-sm mr-2 mb-2 px-5 py-2.5 text-center" type="button">
                  Tambah karyawan
               </button>
               <!-- Main modal -->
               <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                  <div class="relative w-full max-w-md max-h-full">
                     <!-- Modal content -->
                     <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="authentication-modal">
                           <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                           </svg>
                           <span class="sr-only">Tutup</span>
                        </button>
                        <div class="px-6 py-6 lg:px-8">
                           <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Tambah karyawan</h3>
                           <form class="space-y-6" action="karyawan.php" method="POST">
                              <div>
                                 <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                 <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="nama karyawan" required>
                              </div>
                              <div>
                                 <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                 <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="username">
                              </div>
                              <div>
                                 <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                 <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="email@apotech.com">
                              </div>
                              <div>
                                 <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                 <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="password">
                              </div>
                              <button type="submit" class="w-full text-white bg-green-700 hover:bg-green-800  font-medium rounded-lg text-sm px-5 py-2.5 text-center">Tambah</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
               <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                     <tr>
                        <th scope="col" class="px-6 py-3">
                           Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Username
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                           <span class="sr-only">Edit</span>
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     $query = "SELECT * FROM admin ORDER BY id ASC";
                     $result = mysqli_query($mysqli, $query);
                     if ($result->num_rows > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                           $id = $row['id'];
                           $nama = $row['nama'];
                           $username = $row['username'];
                           $email = $row['email'];
                     ?>
                           <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                              <td class="px-6 py-4"><?php echo $id; ?></td>
                              <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"><?php echo $nama; ?></td>
                              <td class="px-6 py-4"><?php echo $username; ?></td>
                              <td class="px-6 py-4"><?php echo $email; ?></td>
                              <td class="px-6 py-4 flex justify-between">

                                 <a data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="block text-red-700 hover:underline font-medium text-sm px-5 py-2.5 text-center" type="button">
                                    Hapus
                                 </a>
                                 <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative w-full max-w-md max-h-full">
                                       <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                          <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="popup-modal">
                                             <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                             </svg>
                                             <span class="sr-only">Tutup</span>
                                          </button>
                                          <div class="p-6 text-center">
                                             <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                             </svg>
                                             <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin untuk menghapus data karyawan ini?</h3>
                                             <a data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2" href="hapus_karyawan.php?id=<?php echo $id; ?>">
                                                Ya, hapus
                                             </a>
                                             <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 </a>
                                 <a class="block text-blue-700 hover:underline font-medium text-sm px-5 py-2.5 text-center" type="button" href="edit_karyawan.php?id=<?php echo $id; ?>">
                                    Edit
                                 </a>
                              </td>
                           </tr>
                        <?php
                        }
                     } else {
                        ?>
                        <tr>
                           <td colspan="12" class="px-6 py-4 text-gray-500">Tidak ada Data Karyawan.</td>
                        </tr>
                     <?php
                     }
                     ?>
                  </tbody>
               </table>
            </div>

         </div>

      </div>


   </div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>

</html>