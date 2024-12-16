<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru</title>
</head>
<body>
    <h1>Form Pendaftaran Siswa Baru</h1>
    <form action="proses-pendaftaran.php" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br><br>
        
        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat" required><br><br>
        
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select name="jenis_kelamin" id="jenis_kelamin" required>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br><br>
        
        <label for="agama">Agama:</label>
        <input type="text" name="agama" id="agama" required><br><br>
        
        <label for="sekolah_asal">Sekolah Asal:</label>
        <input type="text" name="sekolah_asal" id="sekolah_asal" required><br><br>

        <button type="submit">Daftar</button>
    </form>
</body>
</html>
