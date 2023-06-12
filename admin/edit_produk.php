
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
          <?php
	        include 'config.php';
	        $kd_obat = $_GET['kd_obat'];
	        $data = mysqli_query($mysqli,"select * from detail_obat where kd_obat='$kd_obat'");
	        while($d = mysqli_fetch_array($data)){
		  ?>
          <form class="space-y-6" action="update.php?kd_obat=<?php echo $kd_obat; ?>" method="POST">
                    <div>
                        <label for="nama_obat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Produk</label>
                        <input type="text" name="nama_obat" id="nama_obat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" value="<?php echo $d['nama_obat']; ?>" required>
                    </div>
                    <label for="kategori_obat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih kategori</label>
                    <select id="kategori_obat" name="kategori_obat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                        <option disabled value="">Kategori</option>
                        <option <?php if ($d['kategori_obat'] == 'Analgesik') echo 'selected'; ?>>Analgesik</option>
                        <option <?php if ($d['kategori_obat'] == 'Antiseptik') echo 'selected'; ?>>Antiseptik</option>
                        <option <?php if ($d['kategori_obat'] == 'Antibiotik') echo 'selected'; ?>>Antibiotik</option>
                        <option <?php if ($d['kategori_obat'] == 'Antipiretik') echo 'selected'; ?>>Antipiretik</option>
                        <option <?php if ($d['kategori_obat'] == 'Vitamin') echo 'selected'; ?>>Vitamin</option>
                    </select>
                    <div>
                        <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                        <input type="text" name="deskripsi" id="deskripsi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" value="<?php echo $d['deskripsi']; ?>">
                    </div>
                    <div>
                        <label for="kemasan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kemasan</label>
                        <input type="text" name="kemasan" id="kemasan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" value="<?php echo $d['kemasan']; ?>">
                    </div>
                    <div>
                        <label for="dosis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dosis</label>
                        <input type="text" name="dosis" id="dosis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" value="<?php echo $d['dosis']; ?>">
                    </div>
                    <div>
                        <label for="efek_samping" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Efek samping</label>
                        <input type="text" name="efek_samping" id="efek_samping" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" value="<?php echo $d['efek_samping']; ?>">
                    </div>
                    <div>
                        <label for="tgl_expired" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal expired</label>
                        <input type="date" name="tgl_expired" id="tgl_expired" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" value="<?php echo $d['tgl_expired']; ?>">
                    </div>
                    <div>
                        <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                        <input type="text" name="harga" id="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" value="<?php echo $d['harga']; ?>">
                    </div>
                    <div>
                        <label for="stok" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stok</label>
                        <input type="text" name="stok" id="stok" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" value="<?php echo $d['stok']; ?>">
                    </div>
                    <div>
                        <label for="gambar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar</label>
                        <input type="file" name="gambar" id="gambar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                    </div>
                    <button type="submit" class="w-full text-white bg-green-700 hover:bg-green-800  font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                </form>
                <?php 
	}
	?>
        </div>
      </div>
  </section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

</html>