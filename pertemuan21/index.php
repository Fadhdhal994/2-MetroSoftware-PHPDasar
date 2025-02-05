<?php
session_start();
if( !isset($_SESSION["login"]) ) {
  header("Location: login.php");
  exit;
}

require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
  $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
  <style>
    .loader {
      width: 100px;
      position: absolute;
      top: 122px;
      z-index: -1;
      left: 285px;
      display: none;
    }

    @media print {
      .logout, .tambah, .form-cari, .aksi{
        display: none;
      }
    }
  </style>

  <script src="js/jquery-3.7.1.js"></script>
  <script src="js/script.js"></script>
</head>
<body>

  <a href="logout.php" class="logout">Logout</a> | <a href="cetak.php" target=" _blank">Cetak</a>
  
  <h1>Daftar Mahasiswa</h1>

  <a href="tambah.php" class="tambah">Tambah data mahasiswa</a>
  <br><br>
  
  <form action="" method="post" class="form-cari">

    <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off" id="keyword">
    <button type="submit" name="cari" id="tombol-cari">Cari!</button>

    <img src="img/loader.gif" class="loader">

  </form>

<br><br>
  <div id="container">
  <table border="1" cellpadding="10"  cellspacing="0">
    <tr>
      <th>No.</th>
      <th class="aksi">Aksi</th>
      <th>Gambar</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $mahasiswa as $row) : ?>
    <tr>
      <td><?= $i; ?></td>
      <td class="aksi">
        <a href="ubah.php?id=<?= $row["id"];?>">ubah</a> |
        <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm ('Apakah Anda Yakin Untuk Menghapus Data?')">hapus</a>
      </td>
      <td><img src="img/<?= $row["gambar"];?>" width="50"></td>
      <td><?= $row["nim"];?></td>
      <td><?= $row["nama"];?></td>
      <td><?= $row["email"];?></td>
      <td><?= $row["jurusan"];?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

  </table>
  </div>
</body>
</html>