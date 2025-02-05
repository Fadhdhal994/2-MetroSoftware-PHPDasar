<?php
$mahasiswa = [["M Asad Mufadhdhal", "Teknik Komputer", "2211513054", "synlash7@gmail.com"],
["M Asad Mufadhdhal", "Teknik Komputer", "2211513054", "synlash7@gmail.com"],["Fairuz", "Teknik Mesin", "1911513024", "erik69@gmail.com"]
];

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
	<li>Nama	: <?= $mhs[0]; ?></li>
	<li>Jurusan	: <?= $mhs[1]; ?></li>
	<li>NIM	: <?= $mhs[2]; ?></li>
	<li>Email	: <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>
</body>
</html>
