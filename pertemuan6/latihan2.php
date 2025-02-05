<?php
$mahasiswa = [
    [
        "nama" => "Fadhdhal",
        "nim" => "2211513054",
        "email" => "synlash7@gmail.com",
        "jurusan" => "Teknik Komputer",
        "gambar" => "fadhdhal.JPG"
    ],
    [
        "nama" => "Dody Irawan",
        "nim" => "2211513024",
        "email" => "synlash8@gmail.com",
        "jurusan" => "Teknik Industri",
        "tugas" => [90, 80, 100],
        "gambar" => "synyster.JPG"
    ]
];

// echo $mahasiswa[1]["tugas"][1];
?>



<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach( $mahasiswa as $mhs ) : ?>
		<ul>
			<li>
				<img src="img/DSC06467.JPG">
			</li>
			<li>Nama : <?= $mhs["nama"]; ?></li>
			<li>NIM : <?= $mhs["nim"]; ?></li>
			<li>Email :<?= $mhs["email"]; ?></li>
			<li>Jurusan :<?= $mhs["jurusan"]; ?></li>
		</ul>
	<?php endforeach; ?>

</body>
</html>