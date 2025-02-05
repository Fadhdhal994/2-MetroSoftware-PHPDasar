<?php 
// GET
$mahasiswa = [
    [
        "nama" => "spongebob", 
        "warna" => "kuning",
        "sifat" => "setia",
        "gambar" => "spongebob.jpg"
    ],
    [
        "nama" => "garry", 
        "warna" => "biru muda",
        "sifat" => "pemdiam",
        "gambar" => "garry.jpg"
    ]
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<h1>Data karakter</h1>
<ul>
<?php foreach( $mahasiswa as $mhs) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; 
        ?>&warna=<?= $mhs["warna"]; ?>&sifat=<?= $mhs
        ["sifat"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?=
        $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>





</body>
</html>