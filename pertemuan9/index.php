<?php 
// konekni ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data tabel mahasiswa 
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");


// ambil data (fetch) mahasiswa dari object result
// mysql_fetch_row() // mengembalikan array numerik
// mysql_fetch_assoc() 
// mysql_fetch_array()
// mysql_fetch_object()

$mhs = mysqli_fetch_object($result);
var_dump($mhs);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Nim </th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <tr>
        <td>1</td>
        <td>
            <a href="">Ubah</a>
            <a href="">Hapus</a>
        </td>
        <td><img src="img/spongebob.jpg" width="80"></td>
        <td>fadhdhal</td>
        <td>2211513054</td>
        <td>synlash7@gmail.com</td>
        <td>Teknik Komputer</td>
    </tr>

</table>

</body>
</html>