<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background: #f7f7f7;
        }
        header {
            background: #333;
            color: white;
            padding: 15px;
            text-align: center;
        }
        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 0;
        }
        nav a {
            color: white;
            text-decoration: none;
        }
        main {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }
        h2 {
            color: #333;
            border-bottom: 2px solid #ddd;
            padding-bottom: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            border: 1px solid #999;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #e0e0e0;
        }
        footer {
            text-align: center;
            margin-top: 30px;
            color: #666;
        }
    </style>
</head>
<body>

<header>
    <h1>Ini Header</h1>
    <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">&#9776;</button>
    <nav>
        <ul>
            <li><a href="#home">Beranda</a></li>
            <li><a href="#ipk">Nilai</a></li>
            <li><a href="#contact">Kontak</a></li>
        </ul>
    </nav>
</header>

<main>

<section id="home">
    <h2>Selamat Datang</h2>
    <p>Ini contoh paragraf HTML.</p>
    <?php
        echo "Halo Dunia!<br>";
        echo "Nama: Maharani Indah Saputri<br>";
    ?>
</section>

<section id="ipk">
    <h2>Nilai Saya</h2>

    <?php
    $mataKuliah = [
        ["Kalkulus", 3, 95, 80, 80, 75],
        ["Logika Informatika", 3, 90, 90, 90, 95],
        ["Konsep Basis Data", 3, 80, 85, 80, 90],
        ["Aplikasi Perkantoran", 3, 95, 80, 95, 85],
        ["Pemrograman Web Dasar", 3, 100, 90, 85, 95],
    ];

    function getGrade($nilaiAkhir) {
        if ($nilaiAkhir >= 91) return ["A", 4.00];
        elseif ($nilaiAkhir >= 81) return ["A-", 3.70];
        elseif ($nilaiAkhir >= 76) return ["B+", 3.30];
        elseif ($nilaiAkhir >= 71) return ["B", 3.00];
        elseif ($nilaiAkhir >= 66) return ["B-", 2.70];
        elseif ($nilaiAkhir >= 61) return ["C+", 2.30];
        elseif ($nilaiAkhir >= 56) return ["C", 2.00];
        elseif ($nilaiAkhir >= 51) return ["C-", 1.70];
        elseif ($nilaiAkhir >= 36) return ["D", 1.00];
        else return ["E", 0.00];
    }

    echo "<table>
        <tr>
            <th>No</th>
            <th>Nama Matakuliah</th>
            <th>SKS</th>
            <th>Kehadiran</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Nilai Akhir</th>
            <th>Grade</th>
            <th>Angka Mutu</th>
            <th>Bobot</th>
            <th>Status</th>
        </tr>";

    $totalBobot = 0;
    $totalSKS = 0;
    $no = 1;

    foreach ($mataKuliah as $m) {
        list($nama, $sks, $hadir, $tugas, $uts, $uas) = $m;
        $nilaiAkhir = ($hadir * 0.1) + ($tugas * 0.2) + ($uts * 0.3) + ($uas * 0.4);
        list($grade, $mutu) = getGrade($nilaiAkhir);
        $bobot = $sks * $mutu;
        $status = ($mutu > 0) ? "Lulus" : "Tidak Lulus";

        echo "<tr>
            <td>$no</td>
            <td>$nama</td>
            <td>$sks</td>
            <td>$hadir</td>
            <td>$tugas</td>
            <td>$uts</td>
            <td>$uas</td>
            <td>" . number_format($nilaiAkhir, 2) . "</td>
            <td>$grade</td>
            <td>" . number_format($mutu, 2) . "</td>
            <td>" . number_format($bobot, 2) . "</td>
            <td>$status</td>
        </tr>";

        $totalBobot += $bobot;
        $totalSKS += $sks;
        $no++;
    }

    $ipk = $totalBobot / $totalSKS;
    $statusAkhir = ($ipk >= 2.00) ? "Lulus" : "Tidak Lulus";

    echo "<tr>
        <th colspan='10' style='text-align:right;'>Total</th>
        <th>" . number_format($totalBobot, 2) . "</th>
        <th>$statusAkhir</th>
    </tr>
    </table>";

    echo "<p><b>Total SKS:</b> $totalSKS<br>";
    echo "<b>IPK:</b> " . number_format($ipk, 2) . "<br>";
    echo "<b>Status Akhir:</b> $statusAkhir</p>";
    ?>
</section>

<section id="contact">
    <h2>Kontak Kami</h2>
    <form action="" method="GET">
        <label for="txtNama">Nama:</label><br>
        <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required><br><br>

        <label for="txtEmail">Email:</label><br>
        <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required><br><br>

        <label for="txtPesan">Pesan Anda:</label><br>
        <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required></textarea><br><br>

        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
    </form>
</section>

</main>

<footer>
    <p>&copy; 2025 Maharani Indah Saputri | 2511500082</p>
</footer>

</body>
</html>
