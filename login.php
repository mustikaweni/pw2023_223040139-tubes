<?php

session_start();

require 'functions.php';

if (isset($_POST["login"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE 
	    username = '$username'");

	// cek username
	if (mysqli_num_rows($result) === 1) {

		// cek password
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["pasword"])) {
			$_SESSION['login'] = true;
			$_SESSION['role'] = $row['role'];

			if ($_SESSION['role'] == 'admin') {
				echo "
				<script>
					alert('Anda berhasil login!');
					window.location.href = 'index1.php';
				</script>
				";
			}

			if ($_SESSION['role'] == 'user') {
				echo "
				<script>
					alert('Anda berhasil login!');
					window.location.href = 'index.php';
				</script>
				";
			}

			// header("Location: index1.php");
			// exit;
		}
	}

	$error = true;
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-4 mt-5 shadow-lg rounded">
				<h1 class="text-center">Halaman Login</h1>
				<form action="" method="post" class="form">
					<div class="mb-3">
						<?php if (isset($error)) : ?>
							<p style="color: red; font-style: italic;">username /password salah</p>
						<?php endif; ?>
					</div>
					<div class="mb-3">
						<label for="username" class="form-label">Username :</label>
						<input type="text" name="username" id="username" class="form-control">
					</div>
					<div class="mb-3">
						<label for="password" class="form-label">Password :</label>
						<input type="password" name="password" id="password" class="form-control">
					</div>
					<div class="text-center">
						<button type="submit" name="login" class="btn btn-primary mb-3">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>