<?php
session_start();

require 'koneksi.php';
require_once __DIR__ . '/fungsi.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['flash_error'] = 'Akses tidak valid.';
    header("Location: index.php");
    exit;
}

function bersihkan($data) {
    return htmlspecialchars(trim($data));
}

$nama  = bersihkan($_POST['txtNama']  ?? '');
$email = bersihkan($_POST['txtEmail'] ?? '');
$pesan = bersihkan($_POST['txtPesan'] ?? '');

$errors = [];

if ($nama === '') {
    $errors[] = 'Nama wajib diisi.';
}

if ($email === '') {
    $errors[] = 'Email wajib diisi.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Format email tidak valid.';
}

if ($pesan === '') {
    $errors[] = 'Pesan wajib diisi.';
}
if (!empty($errors)) {
    $_SESSION['old'] = [
        'nama'  => $nama,
        'email' => $email,
        'pesan' => $pesan
    ];
    $_SESSION['flash_error'] = implode('<br>', $errors);
    redirect_ke('index.php#contact');
}
if (!empty($errors)) {
    $_SESSION['old'] = [
        'nama'  => $nama,
        'email' => $email,
        'pesan' => $pesan
    ];
    $_SESSION['flash_error'] = implode('<br>', $errors);
    redirect_ke('index.php#contact');
}
header("Location: index.php#contact");
exit;

