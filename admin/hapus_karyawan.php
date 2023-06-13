<?php
session_start();
include('config.php'); // file koneksi ke database

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the product from the database
    $query = "DELETE FROM admin WHERE id='$id'";
    $result = mysqli_query($mysqli, $query);

    if ($result) {
        echo "<script>alert('Data karyawan berhasil dihapus!'); window.location.href = '/apotech/admin/karyawan.php'</script>";
        exit();
    } else {
        echo "<script>alert('Data karyawan gagal dihapus!'); window.location.href = '/apotech/admin/karyawan.php'</script>";
    }
} else {
    // Handle case when 'id' is not set
    echo "<script>alert('Id Karyawan tidak ditemukan!'); window.location.href = '/apotech/admin/karyawan.php'</script>";
}
?>