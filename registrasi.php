<?php
require 'functions.php';

if (isset($_POST["register"])) {

	if (registrasi($_POST) > 0) {
		echo "<script>
				alert('user baru berhasil ditambahkan!');
				document.location.href = 'login.php';
			  </script>";
	} else {
		echo mysqli_error($conn);
	}
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Halaman Registrasi</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-4 mt-5 shadow-lg rounded">
				<h1 class="text-center">Halaman Register</h1>
				<form action="" method="post" class="form">
					<div class="mb-3">
						<label for="username" class="form-label">Username :</label>
						<input type="text" name="username" id="username" class="form-control">
					</div>
					<div class="mb-3">
						<label for="password" class="form-label">Password :</label>
						<input type="password" name="password" id="password" class="form-control">
					</div>
					<div class="mb-3">
						<label for="password2" class="form-label">Password-Repeat :</label>
						<input type="password2" name="password2" id="password2" class="form-control">
					</div>
					<div class="text-center">
						<button type="submit" name="register" class="btn btn-primary mb-3">Register</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>