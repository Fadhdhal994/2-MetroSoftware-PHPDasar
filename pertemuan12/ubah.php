<?php
require 'function.php';
// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// koneksikan ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
  // cek apakah data berhasil ditambahkan atau tidak


  // cek apakah data berhasil diubah atau tidak
  if( ubah($_POST) > 0 ) {
    echo "
      <script>
        alert('data berhasil diubah!');
        document.location.href = 'index.php';
      </script>";
  } else {
    echo "
      <script>
        alert('data gagal diubah!');
        document.location.href = 'index.php';
      </script>";
  }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiswa</title>
</head>
<body>
  <h1>Ubah Data Mahasiswa</h1>

  <form action="" method="post">
    <ul>
      <input type="hidden" name="id" value="<?= $mhs["id"];?>">
      <li>
        <label for="nim">NIM :</label>
        <input type="text" name="nim" id="nim"
        required value="<?= $mhs["nim"];?>">
      </li>
      <li>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama"
        required value="<?= $mhs["nama"];?>">
      </li>
      <li>
        <label for="email">Email :</label>
        <input type="text" name="email" id="email"
        required value="<?= $mhs["email"];?>">
      </li>
      <li>
        <label for="jurusan">Jurusan :</label>
        <input type="text" name="jurusan" id="jurusan"
        required value="<?= $mhs["jurusan"];?>">
      </li>
      <li>
        <label for="gambar">Gambar :</label>
        <input type="text" name="gambar" id="gambar"
        required value="<?= $mhs["gambar"];?>">
      </li>
      <li>
        <button type="submit" name="submit">Ubah Data!</button>
      </li>
    </ul>
  
    </form>
</body>
</html>