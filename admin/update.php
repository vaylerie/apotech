<?php
session_start();
include('config.php'); // file koneksi ke database  

$ambil = $mysqli->query("SELECT * FROM detail_obat WHERE kd_obat='$_GET[kd_obat]'");
$pecah = $ambil->fetch_assoc();

if (isset($_POST['ubah'])) {

    $kd_obat = $_GET['kd_obat'];
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
    $gambar = 'data:image/jpeg;base64,' . base64_encode($gambarData);

    if (!empty($gambarData)) {
        $mysqli->query("UPDATE detail_obat SET nama ='$_POST[nama_obat]', kategori_obat = '$_POST[kategori_obat]', deskripsi = '$_POST[deskripsi]', kemasan = '$_POST[kemasan]', dosis = '$_POST[dosis]', efek_samping = '$_POST[efek_samping]', tgl_expired = '$_POST[tgl_expired]', harga ='$_POST[harga]', stok = '$_POST[stok]', gambar ='$_POST[gambar]' Where kd_obat='$_GET[kd_obat]'");
    } else {
        $mysqli->query("UPDATE detail_obat SET nama ='$_POST[nama_obat]', kategori_obat = '$_POST[kategori_obat]', deskripsi = '$_POST[deskripsi]', kemasan = '$_POST[kemasan]', dosis = '$_POST[dosis]', efek_samping = '$_POST[efek_samping]', tgl_expired = '$_POST[tgl_expired]', harga ='$_POST[harga]', stok = '$_POST[stok]', gambar ='$_POST[gambar]' Where kd_obat='$_GET[kd_obat]'");
    }
    echo "<script>alert('Produk berhasil diedit!'); document.location.href = '/apotech/admin/daftar_produk.php'</script>";
}
