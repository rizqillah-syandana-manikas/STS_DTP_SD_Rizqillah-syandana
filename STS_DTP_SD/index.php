<?php 
    include 'db_laporan_fasilitas.sql'; // Include the database connection file
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelaporan Kerusakan Fasilitas Sekolah</title>
</head>
<body>
    <link rel="stylesheet" href="header.css">
    <link rel ="stylesheet" href="db_laporan_fasilitas.sql">
    <link rel ="stylesheet" href="koneksi.php>
</body>
<body>
    <header>
        <h1>Sistem Pelaporan Kerusakan Fasilitas Sekolah</h1>
        <p>Catat dan pantau laporan kerusakan fasilitas sekolah.</p>
        <nav aria-label="Navigasi utama">
            <a href="#form-laporan">Buat Laporan</a>
            <a href="#daftar-laporan">Daftar Laporan</a>
        </nav>
    </header>

    <main>
        <section id="form-laporan" aria-labelledby="judul-form">
            <h2 id="judul-form">Form Pelaporan Kerusakan</h2>
            <p>Lengkapi data berikut untuk melaporkan fasilitas yang rusak.</p>

            <style 
>
                form {
                    max-width: 600px;
                    margin: 0 auto;
                    padding: 20px;
                    border: 2px solid #000000ff;
                    border-radius: 5px;
                    background-color: #f3f6f7ff;
                }

                fieldset {
                    border: none;
                    padding: 0;
                }

                legend {
                    font-size: 1.5em;
                    margin-bottom: 10px;
                }

                p {
                    margin-bottom: 15px;
                }

                label {
                    display: block;
                    margin-bottom: 5px;
                }

                input[type="text"],
                select,
                textarea {
                    width: 100%;
                    padding: 8px;
                    box-sizing: border-box;
                }

                button {
                    padding: 10px 20px;
                    background-color: #007BFF;
                    color: white;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                }

                button:hover {
                    background-color: #0056b3;
                }
            </style>
            <!-- TANTANGAN BONUS CREATE: Buat proses PHP agar POST menyimpan data. -->
            <form action="" method="post">
                <fieldset>
                    <legend>Data Pelaporan</legend>

                    <p>
                        <label for="nama_pelapor">Nama pelapor</label>
                        <input type="text" id="nama_pelapor" name="nama_pelapor" maxlength="100" required>
                    </p>

                    <p>
                        <label for="nama_fasilitas">Nama fasilitas</label>
                        <input type="text" id="nama_fasilitas" name="nama_fasilitas" maxlength="100" required>
                    </p>

                    <p>
                        <label for="lokasi">Lokasi kerusakan</label>
                        <input type="text" id="lokasi" name="lokasi" maxlength="100" required>
                    </p>

                    <p>
                        <label for="id_kategori">Kategori fasilitas</label>
                        <select id="id_kategori" name="id_kategori" required>
                            <option value="">-- Pilih kategori --</option>
                            <!-- Nilai berikut sesuai dengan data awal kategori_fasilitas. -->
                            <option value="1">Elektronik</option>
                            <option value="2">Furnitur</option>
                            <option value="3">Jaringan</option>
                            <option value="4">Peralatan Kelas</option>
                        </select>
                    </p>

                    <p>
                        <label for="deskripsi">Deskripsi kerusakan</label>
                        <textarea id="deskripsi" name="deskripsi" rows="4" required></textarea>
                    </p>

                    <p>
                        <label for="prioritas">Prioritas</label>
                        <select id="prioritas" name="prioritas" required>
                            <option value="">-- Pilih prioritas --</option>
                            <option value="Rendah">Rendah</option>
                            <option value="Sedang">Sedang</option>
                            <option value="Tinggi">Tinggi</option>
                        </select>
                    </p>

                    <p><button type="submit">Kirim Laporan</button></p>
                </fieldset>
            </form>
            <p><small>Catatan: tombol Kirim Laporan belum menyimpan apa pun. Fitur Create merupakan tantangan bonus.</small></p>
        </section>

        <section id="daftar-laporan" aria-labelledby="judul-daftar">
            <h2 id="judul-daftar">Daftar Laporan Kerusakan</h2>
            <p1>Seluruh laporan yang tercatat pada database ditampilkan di bagian ini.</p1>

            <!-- TANTANGAN WAJIB:
                1. Buat sendiri koneksi PHP ke MySQL.
                2. Jalankan query SELECT untuk mengambil data dari laporan_kerusakan.
                3. Ganti baris placeholder pada tbody dengan perulangan hasil query.
                4. Jangan mengetik data database secara manual di HTML.
            -->
            <table>
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Fasilitas</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Pelapor</th>
                        <th scope="col">Prioritas</th>
                        <th scope="col">Status</th>
                        <th scope="col">Tanggal</th>
                    </tr>
                    <form action="" method="post">
                        <input type="hidden" name="id_laporan" value="<?php echo $row['id_laporan']; ?>">
                        <button type="submit" name="hapus">Hapus</button>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Proyektor</td>
                        <td>Ruang Kelas 1</td>
                        <td>Ahmad</td>
                        <td>Tinggi</td>
                        <td>Belum diperbaiki</td>
                        <td>2024-06-01</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Sistem Pelaporan Kerusakan Fasilitas Sekolah.</p>
    </footer>
</body>
<?php
