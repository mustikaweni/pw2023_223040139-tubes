<?php

session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';


$kuliner = query("SELECT * FROM kuliner");


// tombol cari ditekan
if (isset($_POST["cari"])) {
    echo 'selamat datang';
    $kuliner = cari($_POST["keyword"]);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <a href="logout.php">Logout</a>

    <h1>Daftar Menu</h1>

    <a href="tambah.php"> Tambah Daftar Menu</a>
    <br><br>


    <form action="" method="post">
        <input type="text" name="keyword" size="30" autofocus placeholder="masukan keyword pencarian.." autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>

    <br></br>
    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>nama_makanan</th>
            <th>deskripsi_makanan</th>
            <th>gambar</th>
            <th>harga</th>
        </tr>

        <?php $i = 1;  ?>
        <?php foreach ($kuliner as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
                    <a href="hapus.php?id=<?= $row["id"]; ?>">hapus</a>
                </td>
                <td><?= $row["nama_makanan"]; ?></td>
                <td><?= $row["deskripsi_makanan"]; ?></td>
                <td><img src="img/<?= $row["gambar"]; ?> " width="50"></td>
                <td><?= $row["harga"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>

</body>

</html>