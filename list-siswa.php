<?php
include('config.php');

$sql = "SELECT * FROM calon_siswa";
$result = $conn->query($sql);

echo "<h1>Daftar Siswa Yang Telah Mendaftar</h1>";

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Action</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['nama'] . "</td>
                <td>" . $row['alamat'] . "</td>
                <td>" . $row['jenis_kelamin'] . "</td>
                <td>" . $row['agama'] . "</td>
                <td>" . $row['sekolah_asal'] . "</td>
                <td><a href='hapus.php?id=" . $row['id'] . "'>Hapus</a></td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada siswa yang terdaftar.";
}

$conn->close();
?>
