<?php 
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) || 
    !isset($_GET["warna"]) ||
    !isset($_GET["sifat"]) ||
    !isset($_GET["gambar"])) {
    // redirect
    header("Location: latihan1.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail karakter</title>
</head>
<body>
    <ul>
        <li><img src="img/<?php echo $_GET["gambar"]; ?>"></li>
        <li><?php echo $_GET["nama"]; ?></li>
        <li><?php echo $_GET["warna"]; ?></li>
        <li><?php echo $_GET["sifat"]; ?></li>
    </ul>

<a href="latihan1.php">Kembali ke pilihan karakter</a>
</body>
</html>