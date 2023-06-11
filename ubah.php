<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data daftar menu berdasarkan id
$kln = query("SELECT * FROM kuliner  WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah data Daftar Menu</title>
</head>
<body>
	<h1>Ubah data Daftar Menu</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $kln["id"]; ?>">
		<input type="hidden" name="gambarlama" value="<?= $kln["id"]; ?>">
		<ul>
			<li>
				<label for="nama_makanan">nama_makanan :</label>
				<input type="text" name="nama_makanan" id="nama_makanan" value="<?= $kln["nama_makanan"]; ?>">
			</li>
			<li>
				<label for="deskripsi_makanan">Deskripsi:</label>
				<input type="text" name="deskripsi" id="deskripsi_makanan" value="<?= $kln["deskripsi_makanan"];?>">
			</li>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="file" name="gambar" id="gambar" value="<?= $kln["gambar"]; ?>">
			</li>
			<li>
				<label for="harga">Harga :</label>
				<input type="text" name="harga" id="harga" value="<?= $kln["harga"]; ?>">
			</li>
			<li>

				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>

	</form>




</body>
</html>