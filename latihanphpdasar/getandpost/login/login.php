<?php 
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"]) ) {
	// cek username & password
	if ( $_POST ["username"] == "wahyu" && $_POST ["password"] == "123") {
	// jika benar, redirect ke halaman admin
		header("Location: admin.php");
		exit;
	} else {
	// jika salah, tampil pesan kesalahan
		$error = true;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>
	<h1>Login Admin</h1>

	<?php if (isset($error) ) : ?>
		<p style= "color : red; font-style : italic">Username / Password anda salah!!</p>
	<?php endif; ?>

	<table>
		<form action="" method="post">
			<tr><td><label for="username">username :</label></td>
			<td><input type="text" name="username" id="username"></td></tr>

			<tr><td><label for="password">password :</label></td>
			<td><input type="password" name="password" id="password"></td></tr>

			<tr><td><button type="submit" name="submit">Login</button>
			<button type="reset" name="hapus">Hapus</button></td></tr>
		</form>
	</table>
</body>
</html>