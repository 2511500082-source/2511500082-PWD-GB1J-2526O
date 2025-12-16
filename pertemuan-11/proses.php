<?php
session_start();

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