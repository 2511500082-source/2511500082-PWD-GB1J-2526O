<?php
session_start();
require 'koneksi.php';
require 'fungsi.php';

/* =========================
   VALIDASI CID
========================= */
$cid = filter_input(INPUT_GET, 'cid', FILTER_VALIDATE_INT);

if (!$cid) {
  $_SESSION['flash_error'] = "ID tidak valid.";
  redirect_ke('ranicantik.php');
}

/* =========================
   PROSES DELETE
========================= */
$sql = "DELETE FROM rani_tbl WHERE cid = ?";
$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
  $_SESSION['flash_error'] = "Query gagal disiapkan.";
  redirect_ke('ranicantik.php');
}

mysqli_stmt_bind_param($stmt, "i", $cid);

if (mysqli_stmt_execute($stmt)) {
  $_SESSION['flash_sukses'] = "Data berhasil dihapus.";
} else {
  $_SESSION['flash_error'] = "Data gagal dihapus.";
}

mysqli_stmt_close($stmt);

redirect_ke('ranicantik.php');
