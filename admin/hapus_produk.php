<?php
session_start();
include('config.php'); // file koneksi ke database

if (isset($_GET['kd_obat'])) {
    $kd_obat = $_GET['kd_obat'];

    // Delete the product from the database
    $query = "DELETE FROM detail_obat WHERE kd_obat='$kd_obat'";
    $result = mysqli_query($mysqli, $query);

    if ($result) {
        echo "<script>alert('Produk berhasil dihapus!'); window.location.href = '/apotech/admin/daftar_produk.php'</script>";
        exit();
    } else {
        echo "<script>alert('Produk gagal dihapus!'); window.location.href = '/apotech/admin/daftar_produk.php'</script>";
    }
} else {
    // Handle case when 'kd_obat' is not set
    echo "<script>alert('Parameter kd_obat tidak ditemukan!'); window.location.href = '/apotech/admin/daftar_produk.php'</script>";
}
?>