<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD

=======
>>>>>>> e7003f7946e1738bade5c24ae4d9fabd5936fd7a
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
<<<<<<< HEAD
            margin: 0;                          
            background-color: #f2f2f2;
            color: #333;

        }

        #about,
        #contact {
            background-color: #f794ce;
            border-radius: 10px;
            padding: 20px;
            max-width: 700px;
            margin: 20px auto;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        #contact h2,
        #about h2 {
            color: #0e0d0d;
            border-bottom: 2px solid #0f0f0f;
            padding-bottom: 6px;
            margin-top: 0;
            margin-bottom: 16px;
        }

        #contact label {
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            margin: 0;
            padding: 6px 0;
            border-bottom: 1px solid #050505;
        }

        #about p {
            display: flex;
            justify-content: flex-start;
            align-items: baseline;
            margin: 0;
            padding: 6px 0;
            border-bottom: 1px solid #050505;
        }

        #about p,
        #contact label {
            display: flex;
            justify-content: flex-start;
            align-items: baseline;
            margin: 0;
            padding: 6px 0;
            border-bottom: 1px;
        }

        #contact label>span {
            min-width: 180px;
            color: #050505;
            font-weight: 600;
            text-align: right;
            padding-right: 16px;
            flex-shrink: 0;
        }

        #about strong {
            min-width: 180px;
            color: #050505;
            font-weight: 600;
            text-align: right;
            padding-right: 16px;
            flex-shrink: 0;
        }

        #about strong,
        #contact label>span {
            min-width: 180px;
            color: #050505;
            font-weight: 600;
            text-align: right;
            padding-right: 16px;
            flex-shrink: 0;
        }

        #contact {
            background-image: url('sanrio-my-melody.gif');
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            padding: 20px;
            max-width: 700px;
            margin: 20px auto;
            color: #050505;
            position: relative;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.952);

        }

        #contact input,
        #contact textarea {
            flex: 1;
            border: 1px solid #ccc;
            border-radius: 6px;
            padding: 8px;
            color: #0f0f0f;
            font-weight: normal;
            margin: 0;
            box-sizing: border-box;
        }

        #contact button {
            margin-top: 10px;
            display: inline-block;
            padding: 10px 24px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            border: none;
            transition: all 0.3s ease;
            margin-right: 8px;

        }

        form button[type="submit"] {
            padding: 10px 20px;
            margin-right: 10px;
            background-color: #f794e2d8;
            border: none;
            color: #0f0f0f;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
        }

        form button[type="reset"] {
            padding: 10px 20px;
            background-color: #0505054b;
            border: none;
            color: #0f0f0f;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
        }

        form button:hover {
            opacity: 0.9;
            transform: scale(1.02);
        }

        footer {
            background-color: #f794ceef;
            color: #0f0f0f;
            text-align: center;
            padding: 10px;
            margin-top: 40px;
        }

        @media (max-width: 600px) {

            #contact input,
            #contact textarea,
            #contact button {
                width: 100%;
            }

            #about p,
            #contact label {
                flex-direction: column;
                align-items: flex-start;
            }

            #about strong,
            #contact label span {
                text-align: left;
                padding-right: 0;
                margin-bottom: 2px;
            }
    </style>
</head>

<body>
    <header>
        <h1>Ini Header</h1>
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
            &#9776;
        </button>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home">
            <h2>Selamat Datang</h2>
            <p>Ini contoh paragraf HTML.</p>
        </section>
        <section id="about">
            <h2>Tentang Saya</h2>
            <p><strong>NIM:</strong> 2511500082 &trade;</p>
            <p><strong>Nama Lengkap:</strong> Maharani Indah Saputri &#9728;</p>
            <p><strong>Tempat Lahir:</strong> Banyumas &#9729;</p>
            <p><strong>Tanggal Lahir:</strong> 08 Oktober 2007 &#10052;</p>
            <p><strong>Hobby:</strong> Main Game,Nonton Film,Dengar Musik &#9834;</p>
            <p><strong>Pasangan:</strong> Tidak ada &#9825;</p>
            <p><strong>Pekerjaan:</strong> Belum ada &#10024;</p>
            <p><strong>Nama Orang Tua:</strong> Bapak Sumarno dan Ibu Sumarni &#10083;</p>
            <p><strong>Nama Kakak:</strong> Sayalah kakaknya &#9749;</p>
            <p><strong>Nama Adek:</strong> Maharina dan Ridho &#9786;</p>

        </section>
        <section id="contact">
            <h2>Kontak Saya<h2>
                    <form action="" method="get">
                        <label for="txtNama"><span>Nama:</span>
                            <input type="txtname" id="txtNama" name="txtNama" placeholder="Masukkan nama Anda" required
                                autocomplete="name">
                        </label>
                        <label for="txtEmail"><span>Email:</span>
                            <input type="txtemail" id="txtEmail" name="txtEmail" placeholder="Masukkan email Anda"
                                required autocomplete="email">
                        </label>
                        <label for="txtPesan"><span>Pesan Anda:</span>
                            <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan Anda..."
                                required></textarea>
                            <small id="charCount">0/200 karakter</small>
                        </label>
                        <button type="submit">Kirim</button>
                        <button type="reset">Batal</button>
                    </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Maharani Indah Saputri 2511500082 </p>
    </footer>
    <script src="script.js"></script>
</body>

=======
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
>>>>>>> e7003f7946e1738bade5c24ae4d9fabd5936fd7a
</html>
