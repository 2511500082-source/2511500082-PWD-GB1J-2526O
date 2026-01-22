<?php
session_start();
require 'koneksi.php';
require 'fungsi.php';

/* =========================
   AMBIL ID DARI URL
========================= */
$cid = filter_input(INPUT_GET, 'cid', FILTER_VALIDATE_INT);

if (!$cid) {
  $_SESSION['flash_error'] = "ID tidak valid.";
  header("Location: read_biodata.php");
  exit;
}

/* =========================
   AMBIL DATA BERDASARKAN ID
========================= */
$sql = "SELECT * FROM rani_tbl WHERE cid = $cid";
$q = mysqli_query($conn, $sql);

if (!$q || mysqli_num_rows($q) == 0) {
  $_SESSION['flash_error'] = "Data tidak ditemukan.";
  header("Location: read_biodata.php");
  exit;
}

$data = mysqli_fetch_assoc($q);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Biodata Mahasiswa</title>
</head>
<body>

<h2>Edit Biodata Mahasiswa</h2>

<form action="proses_update_biodata.php" method="POST">

  <label>ID</label><br>
  <input type="text" name="cid" value="<?= $data['cid']; ?>" readonly><br><br>

  <label>NIM</label><br>
  <input type="text" name="NIM" value="<?= htmlspecialchars($data['NIM']); ?>" required><br><br>

  <label>Nama Lengkap</label><br>
  <input type="text" name="Nama_Lengkap" value="<?= htmlspecialchars($data['Nama_Lengkap']); ?>" required><br><br>

  <label>Tempat Lahir</label><br>
  <input type="text" name="Tempat_Lahir" value="<?= htmlspecialchars($data['Tempat_Lahir']); ?>" required><br><br>

  <label>Tanggal Lahir</label><br>
  <input type="date" name="Tanggal_Lahir" value="<?= htmlspecialchars($data['Tanggal_Lahir']); ?>" required><br><br>

  <label>Hobi</label><br>
  <input type="text" name="Hobi" value="<?= htmlspecialchars($data['Hobi']); ?>"><br><br>

  <label>Pasangan</label><br>
  <input type="text" name="Pasangan" value="<?= htmlspecialchars($data['Pasangan']); ?>"><br><br>

  <label>Pekerjaan</label><br>
  <input type="text" name="Pekerjaan" value="<?= htmlspecialchars($data['Pekerjaan']); ?>"><br><br>

  <label>Nama Ortu</label><br>
  <input type="text" name="Nama_Ortu" value="<?= htmlspecialchars($data['Nama_Ortu']); ?>"><br><br>

  <label>Nama Kakak</label><br>
  <input type="text" name="Nama_Kakak" value="<?= htmlspecialchars($data['Nama_Kakak']); ?>"><br><br>

  <label>Nama Adik</label><br>
  <input type="text" name="Nama_Adik" value="<?= htmlspecialchars($data['Nama_Adik']); ?>"><br><br>

  <button type="submit">Kirim</button>
  <a href="read_biodata.php">Batal</a>

</form>

</body>
</html>
