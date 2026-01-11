<?php
session_start();
require __DIR__ . '/koneksi.php';
require_once __DIR__ . '/fungsi.php';

if (isset($_POST['txtNim'])) {

  $nim       = bersihkan($_POST['txtNim'] ?? '');
  $nama      = bersihkan($_POST['txtNmLengkap'] ?? '');
  $tempat    = bersihkan($_POST['txtT4Lhr'] ?? '');
  $tgl_input = $_POST['txtTglLhr'] ?? '';
  $hobi      = bersihkan($_POST['txtHobi'] ?? '');
  $pasangan  = bersihkan($_POST['txtPasangan'] ?? '');
  $pekerjaan = bersihkan($_POST['txtKerja'] ?? '');
  $ortu      = bersihkan($_POST['txtNmOrtu'] ?? '');
  $kakak     = bersihkan($_POST['txtNmKakak'] ?? '');
  $adik      = bersihkan($_POST['txtNmAdik'] ?? '');

  if ($nim === '' || $nama === '') {
    $_SESSION['flash_biodata_error'] = "NIM dan Nama Lengkap wajib diisi.";
    header("Location: index.php#biodata");
    exit;
  }

  $tanggal = date('Y-m-d', strtotime($tgl_input));

  $sql = "INSERT INTO uas_pwd
    (NIM, Nama_Lengkap, Tempat_Lahir, Tanggal_Lahir, Hobi, Pasangan, Pekerjaan, Nama_Ortu, Nama_Kakak, Nama_Adik)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
    ON DUPLICATE KEY UPDATE
      Nama_Lengkap = VALUES(Nama_Lengkap),
      Tempat_Lahir = VALUES(Tempat_Lahir),
      Tanggal_Lahir = VALUES(Tanggal_Lahir),
      Hobi = VALUES(Hobi),
      Pasangan = VALUES(Pasangan),
      Pekerjaan = VALUES(Pekerjaan),
      Nama_Ortu = VALUES(Nama_Ortu),
      Nama_Kakak = VALUES(Nama_Kakak),
      Nama_Adik = VALUES(Nama_Adik)";

  $stmt = mysqli_prepare($conn, $sql);

  mysqli_stmt_bind_param(
    $stmt,
    "ssssssssss",
    $nim,
    $nama,
    $tempat,
    $tanggal,
    $hobi,
    $pasangan,
    $pekerjaan,
    $ortu,
    $kakak,
    $adik,
  );

  if (!mysqli_stmt_execute($stmt)) {
    die("SQL ERROR BIODATA: " . mysqli_error($conn));
  }

  mysqli_stmt_close($stmt);

  $_SESSION['flash_biodata'] = "Biodata berhasil disimpan.";
  if ($query) {
  $_SESSION['sukses'] = 'Biodata berhasil disimpan / diperbarui'. mysqli_sukses($conn);
} 
  header("Location: index.php#biodata");
  exit;
}