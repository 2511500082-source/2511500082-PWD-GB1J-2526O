<?php
session_start();
require 'koneksi.php';
require 'fungsi.php';

/* =========================
   AMBIL DATA DARI DATABASE
========================= */
$sql = "SELECT * FROM rani_tbl ORDER BY cid DESC";
$q = mysqli_query($conn, $sql);

if (!$q) {
  die("Query error: " . mysqli_error($conn));
}

/* =========================
   FLASH MESSAGE (PRG)
========================= */
$flash_sukses = $_SESSION['flash_sukses'] ?? '';
$flash_error  = $_SESSION['flash_error'] ?? '';

unset($_SESSION['flash_sukses'], $_SESSION['flash_error']);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Biodata Mahasiswa</title>
  <style>
    body { font-family: Arial, sans-serif; }
    table { border-collapse: collapse; width: 100%; }
    th, td { border:1px solid #333; padding:8px; text-align:left; }
    th { background:#f2f2f2; }
    .sukses { background:#d4edda; color:#155724; padding:10px; border-radius:6px; margin-bottom:10px; }
    .error  { background:#f8d7da; color:#721c24; padding:10px; border-radius:6px; margin-bottom:10px; }
  </style>
</head>
<body>

<h2>Data Biodata Mahasiswa</h2>

<?php if (!empty($flash_sukses)): ?>
  <div class="sukses"><?= htmlspecialchars($flash_sukses); ?></div>
<?php endif; ?>

<?php if (!empty($flash_error)): ?>
  <div class="error"><?= htmlspecialchars($flash_error); ?></div>
<?php endif; ?>

<table>
  <tr>
    <th>No</th>
    <th>Aksi</th>
    <th>NIM</th>
    <th>Nama Lengkap</th>
    <th>Tempat Lahir</th>
    <th>Tanggal Lahir</th>
    <th>Hobi</th>
    <th>Pasangan</th>
    <th>Pekerjaan</th>
    <th>Nama Ortu</th>
    <th>Nama Kakak</th>
    <th>Nama Adik</th>
    <th>Created At</th>
  </tr>

<?php if (mysqli_num_rows($q) > 0): ?>
  <?php $i = 1; ?>
  <?php while ($row = mysqli_fetch_assoc($q)): ?>

    <tr>
      <td><?= $i++; ?></td>
      <td>
        <a onclick="return confirm('Yakin hapus data?')"
   href="proses_delete_biodata.php?cid=<?= (int)$row['cid']; ?>">
   Delete
</a>

        <a href="edit_biodata.php?cid=<?= (int)$row['cid']; ?>">Edit</a> |
        <a onclick="return confirm('Hapus data <?= htmlspecialchars($row['Nama_Lengkap']); ?> ?')"
           href="proses_delete_biodata.php?cid=<?= (int)$row['cid']; ?>">
           Delete
        </a>
      </td>
      <td><?= htmlspecialchars($row['NIM']); ?></td>
      <td><?= htmlspecialchars($row['Nama_Lengkap']); ?></td>
      <td><?= htmlspecialchars($row['Tempat_Lahir']); ?></td>
      <td><?= htmlspecialchars($row['Tanggal_Lahir']); ?></td>
      <td><?= htmlspecialchars($row['Hobi']); ?></td>
      <td><?= htmlspecialchars($row['Pasangan']); ?></td>
      <td><?= htmlspecialchars($row['Pekerjaan']); ?></td>
      <td><?= htmlspecialchars($row['Nama_Ortu']); ?></td>
      <td><?= htmlspecialchars($row['Nama_Kakak']); ?></td>
      <td><?= htmlspecialchars($row['Nama_Adik']); ?></td>
      <td><?= formatTanggal($row['created_at']); ?></td>
    </tr>
  <?php endwhile; ?>
<?php else: ?>
    <tr>
      <td colspan="13" align="center">Data belum ada.</td>
    </tr>
<?php endif; ?>
</table>

</body>
</html>
