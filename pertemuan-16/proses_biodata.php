<?php
session_start();
require 'koneksi.php';
require 'fungsi.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  $_SESSION['flash_error'] = "Akses tidak valid.";
  header("Location: read_biodata.php");
  exit;
}

/* =========================
   AMBIL + SANITASI DATA
========================= */
$nim           = htmlspecialchars(trim($_POST['NIM'] ?? ''));
$nama_lengkap  = htmlspecialchars(trim($_POST['Nama_Lengkap'] ?? ''));
$tempat_lahir  = htmlspecialchars(trim($_POST['Tempat_Lahir'] ?? ''));
$tanggal_lahir = htmlspecialchars(trim($_POST['Tanggal_Lahir'] ?? ''));
$hobi          = htmlspecialchars(trim($_POST['Hobi'] ?? ''));
$pasangan      = htmlspecialchars(trim($_POST['Pasangan'] ?? ''));
$pekerjaan     = htmlspecialchars(trim($_POST['Pekerjaan'] ?? ''));
$nama_ortu     = htmlspecialchars(trim($_POST['Nama_Ortu'] ?? ''));
$nama_kakak    = htmlspecialchars(trim($_POST['Nama_Kakak'] ?? ''));
$nama_adik     = htmlspecialchars(trim($_POST['Nama_Adik'] ?? ''));

/* =========================
   VALIDASI SEDERHANA
========================= */
if ($nim == '' || $nama_lengkap == '' || $tempat_lahir == '' || $tanggal_lahir == '') {
  $_SESSION['flash_error'] = "Data wajib (NIM, Nama, TTL) tidak boleh kosong.";
  header("Location: index.php#biodata");
  exit;
}

/* =========================
   SIMPAN KE DATABASE
========================= */
$sql = "INSERT INTO rani_tbl
(NIM, Nama_Lengkap, Tempat_Lahir, Tanggal_Lahir, Hobi, Pasangan, Pekerjaan, Nama_Ortu, Nama_Kakak, Nama_Adik)
VALUES
('$nim','$nama_lengkap','$tempat_lahir','$tanggal_lahir','$hobi','$pasangan','$pekerjaan','$nama_ortu','$nama_kakak','$nama_adik')";

if (mysqli_query($conn, $sql)) {
  $_SESSION['flash_sukses'] = "Data biodata berhasil disimpan.";
} else {
  $_SESSION['flash_error'] = "Data gagal disimpan.";
}

/* =========================
   PRG (POST REDIRECT GET)
========================= */
header("Location: read_biodata.php");
exit;
?>
