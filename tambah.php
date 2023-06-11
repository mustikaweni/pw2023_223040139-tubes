<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {


	// cek apakah data berhasil di tambahkan atau tidak
	if (tambah($_POST) > 0) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Tambah data daftar menu</title>
</head>

<body>
	<h1>Tambah data daftar menu </h1>

	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="nama_makanan">nama_makanan : </label>
				<input type="text" name="nama_makanan" id="nama_makanan" required>
			</li>
			<li>
				<label for="deskripsi">Deskripsi :</label>
				<input type="text" name="deskripsi" id="deskripsi">
			</li>
			<li>
				<label for="harga">harga :</label>
				<input type="text" name="harga" id="harga">
			</li>
			<li>
				<label for="gambar">gambar : </label>
				<input type="file" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>

	</form>




</body>

</html>