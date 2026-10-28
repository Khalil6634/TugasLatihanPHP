<?php
    $host = "localhost:3309"; 
    $username = "root";
    $password = ""; 
    $database = "calon_mhs"; 

    $koneksi = mysqli_connect($host, $username, $password, $database);

    if (!$koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error()); 
    }
    
    if (isset($_POST['submit'])) {
        
        $kode           = $_POST['kode'];
        $nama           = $_POST['nama'];
        $jenis_kelamin  = $_POST['jenis_kelamin'];
        $ttl            = $_POST['ttl'];
        $asal_sekolah   = $_POST['asal_sekolah'];
        $pekerjaan_ortu = !empty($_POST['pekerjaan_ortu']) ? $_POST['pekerjaan_ortu'] : NULL;
        $matematika     = $_POST['matematika'];
        $inggris        = $_POST['inggris'];
        $umum           = $_POST['umum'];
        $keterangan     = $_POST['keterangan'];
        $rata_rata      = $matematika + $inggris + $umum / 3;

        
        // Query untuk memasukkan data (Asumsi nama tabel Anda adalah 'mahasiswa')
        $query = "INSERT INTO calon_mhs (kode, nama, jenis_kelamin, ttl, asal_sekolah, pekerjaan_ortu, matematika, inggris, umum, rata_rata, keterangan) 
                VALUES ('$kode', '$nama', '$jenis_kelamin', '$ttl', '$asal_sekolah', '$pekerjaan_ortu', '$matematika', '$inggris', '$umum', '$rata_rata', '$keterangan')";

// Menjalankan query
if (mysqli_query($koneksi, $query)) {
    if ($rata_rata <= 85) {
        echo "<script>alert('Data mahasiswa berhasil ditambahkan! Nilai A+'); </script>";
        } else if ($rata_rata <= 80) {
        echo "<script>alert('Data mahasiswa berhasil ditambahkan! Nilai A'); </script>";
        } else if ($rata_rata <= 75) {
        echo "<script>alert('Data mahasiswa berhasil ditambahkan! Nilai B'); </script>";
        } else if ($rata_rata <= 70) {
        echo "<script>alert('Data mahasiswa berhasil ditambahkan! Nilai C'); </script>";
    }
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
        }

        // Menutup koneksi database
        mysqli_close($koneksi);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: inline-block; width: 150px; font-weight: bold; }
        input[type="text"], input[type="number"], select { width: 300px; padding: 5px; }
        input[type="submit"] { margin-left: 150px; padding: 5px 15px; cursor: pointer; }
    </style>
</head>
<body>
    <h2>Form Tambah Mahasiswa</h2>
    <form method="POST">
        
        <div class="form-group">
            <label>Kode:</label>
            <input type="text" name="kode" required maxlength="30">
        </div>

        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" required maxlength="150">
        </div>

        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <select name="jenis_kelamin" required>
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <div class="form-group">
            <label>TTL:</label>
            <input type="text" name="ttl" placeholder="Contoh: Jakarta, 12-08-2000" required maxlength="100">
        </div>

        <div class="form-group">
            <label>Asal Sekolah:</label>
            <input type="text" name="asal_sekolah" required maxlength="150">
        </div>

        <div class="form-group">
            <label>Pekerjaan Ortu:</label>
            <input type="text" name="pekerjaan_ortu" maxlength="100">
        </div>

        <div class="form-group">
            <label>Nilai Matematika:</label>
            <input type="number" name="matematika" step="0.01" min="0" max="100" required>
        </div>

        <div class="form-group">
            <label>Nilai Inggris:</label>
            <input type="number" name="inggris" step="0.01" min="0" max="100" required>
        </div>

        <div class="form-group">
            <label>Nilai Umum:</label>
            <input type="number" name="umum" step="0.01" min="0" max="100" required>
        </div>

        <div class="form-group">
            <label>Keterangan:</label>
            <input type="text" name="keterangan" required maxlength="30">
        </div>

        <div class="form-group">
            <input type="submit" name="submit" value="Simpan Data">
        </div>

    </form>
</body>
</html>