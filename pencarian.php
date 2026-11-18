<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian</title>
</head>
<body>
    <h2>Mesin Pencari RPL</h2>
    <form action="" method="GET">
        <input type="text" name="kata_kunci" placeholder="mau cari apa??">
        <button type="submit">Cari</button>
    </form>
    <hr>
    <?php
    if(isset($_GET['kata_kunci'])) {
        $cari=$_GET['kata_kunci'];
        echo"<p>Menampilkan hasil pencarian untuk<b>$cari</b></p>";
    }
    ?>
</body>
</html>