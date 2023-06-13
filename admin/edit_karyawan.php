<?php
session_start();
include('config.php'); // file koneksi ke database  

$id = $_GET['id'];

if (isset($_POST['ubah'])) {
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $updateQuery = "UPDATE admin SET nama='$nama', username='$username', email='$email', password='$password'";

    $updateQuery .= " WHERE id='$id'";

    $mysqli->query($updateQuery);

    echo "<script>alert('Data karyawan berhasil diedit!'); document.location.href = '/apotech/admin/karyawan.php'</script>";
}

// Mengambil data produk dari database
$ambil = $mysqli->query("SELECT * FROM admin WHERE id='$id'");
$pecah = $ambil->fetch_assoc();


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
    <section class="bg-neutral-100 py-10">
        <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 mx-auto">
            <h3 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                Edit data karyawan
            </h3>
            <form class="space-y-6" action="edit_produk.php" method="POST" enctype="multipart/form-data">
                <div>
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" value="<?php echo $pecah['nama']; ?>" required>
                </div>
                <div>
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                    <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" value="<?php echo $pecah['username']; ?>" required>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" value="<?php echo $pecah['email']; ?>">
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                </div>
                <button type="submit" name="ubah" class="w-full text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                </div>
            </form>
            <?php
            ?>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

</html>