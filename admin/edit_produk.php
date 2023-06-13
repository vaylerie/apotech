<?php
session_start();
include('config.php'); // file koneksi ke database  

$kd_obat = $_GET['kd_obat'];

if (isset($_POST['ubah'])) {
    $nama_obat = $_POST['nama_obat'];
    $kategori_obat = $_POST['kategori_obat'];
    $deskripsi = $_POST['deskripsi'];
    $kemasan = $_POST['kemasan'];
    $dosis = $_POST['dosis'];
    $efek_samping = $_POST['efek_samping'];
    $tgl_expired = $_POST['tgl_expired'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $gambarData = $_FILES['gambar']['tmp_name'];
    $gambar = '';

    if (!empty($gambarData)) {
        $gambar = 'data:image/jpeg;base64,' . base64_encode(file_get_contents($gambarData));
    }

    $updateQuery = "UPDATE detail_obat SET nama_obat='$nama_obat', kategori_obat='$kategori_obat', deskripsi='$deskripsi', kemasan='$kemasan', dosis='$dosis', efek_samping='$efek_samping', tgl_expired='$tgl_expired', harga='$harga', stok='$stok'";
    
    if (!empty($gambar)) {
        $updateQuery .= ", gambar='$gambar'";
    }

    $updateQuery .= " WHERE kd_obat='$kd_obat'";

    $mysqli->query($updateQuery);

    echo "<script>alert('Produk berhasil diedit!'); document.location.href = '/apotech/admin/daftar_produk.php'</script>";
}

// Mengambil data produk dari database
$ambil = $mysqli->query("SELECT * FROM detail_obat WHERE kd_obat='$kd_obat'");
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
            Edit produk
        </h3>
        <form class="space-y-6" action="edit_produk.php" method="POST" enctype="multipart/form-data">
            <div>
                <label for="nama_obat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
                <input type="text" name="nama_obat" id="nama_obat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" value="<?php echo $pecah['nama_obat']; ?>" required>
            </div>
            <label for="kategori_obat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih kategori</label>
            <select id="kategori_obat" name="kategori_obat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                <option disabled value="">Kategori</option>
                <option <?php if ($pecah['kategori_obat'] == 'Analgesik') echo 'selected'; ?>>Analgesik</option>
                <option <?php if ($pecah['kategori_obat'] == 'Antiseptik') echo 'selected'; ?>>Antiseptik</option>
                <option <?php if ($pecah['kategori_obat'] == 'Antibiotik') echo 'selected'; ?>>Antibiotik</option>
                <option <?php if ($pecah['kategori_obat'] == 'Antipiretik') echo 'selected'; ?>>Antipiretik</option>
                <option <?php if ($pecah['kategori_obat'] == 'Vitamin') echo 'selected'; ?>>Vitamin</option>
            </select>
            <div>
                <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" value="<?php echo $pecah['deskripsi']; ?>">
            </div>
            <div>
                <label for="kemasan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kemasan</label>
                <input type="text" name="kemasan" id="kemasan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" value="<?php echo $pecah['kemasan']; ?>">
            </div>
            <div>
                <label for="dosis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dosis</label>
                <input type="text" name="dosis" id="dosis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" value="<?php echo $pecah['dosis']; ?>">
            </div>
            <div>
                <label for="efek_samping" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Efek samping</label>
                <input type="text" name="efek_samping" id="efek_samping" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" value="<?php echo $pecah['efek_samping']; ?>">
            </div>
            <div>
                <label for="tgl_expired" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal expired</label>
                <input type="date" name="tgl_expired" id="tgl_expired" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" value="<?php echo $pecah['tgl_expired']; ?>">
            </div>
            <div>
                <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                <input type="text" name="harga" id="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" value="<?php echo $pecah['harga']; ?>">
            </div>
            <div>
                <label for="stok" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stok</label>
                <input type="text" name="stok" id="stok" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" value="<?php echo $pecah['stok']; ?>">
            </div>
            <div>
                <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar</label>
                <input type="file" name="gambar" id="gambar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
            </div>
          <button type="submit" name="ubah" class="w-full text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>

        </form>
        <?php 
        ?>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

</html>
