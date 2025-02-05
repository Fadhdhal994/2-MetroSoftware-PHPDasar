<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
<?php if(isset($_POST["submit"])) : ?>
<h1>Selamat Datang, <?php echo $_POST["nama"]; ?>!</h1>
<?php endif; ?>

    <form action="" method="post">
        Tebak Hewan :
        <input type="text" name="nama">
        <br>
        <button sype="submit" name="submit">tekan lol</button>
    </form>



</body>
</html>