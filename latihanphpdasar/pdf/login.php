<?php
session_start();
include 'functions.php';

// cek cookie
if (isset($_COOKIE['?']) && isset($_COOKIE['key'])) {
	$id = $_COOKIE['?'];
	$key = $_COOKIE['key'];

	// ambil username berdasarkan id
	$result = $conn->query("SELECT username FROM user WHERE id");
	$row = mysqli_fetch_assoc($result);

	// cek cookie dan username
	if ($key === hash('gost',$row['username'])) {
		$_SESSION['login'] = true;
	}
}

// cek session login
if (isset($_SESSION['login'])) {
	header('location: index.php');
	exit;
}

if (isset($_POST['login'])) {
	
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = $conn->query("SELECT * FROM user WHERE username = '$username'");

	// cek username
		if (mysqli_num_rows($result) === 1 ) {

			// cek password
			$row = mysqli_fetch_assoc($result);
			if ( password_verify($password, $row["password"]) ) {
				// set session
				$_SESSION["login"] = true;

				// cek remember me
				if (isset($_POST['remember'])) {
					// buat cookie
					setcookie('?',$row['id'],time()+60);
					setcookie('key', hash('gost', $row['username']),time()+60);
				}

				header("location:index.php");
				exit;
			};
		}

	$error = true;
}

?>
<html>
	<head>
		<title>Login</title>
		<style>
			input{
				background-color:white;
				color:black;
				font-size: 18px;
				font-family: times new roman;
				padding: 5px;
			}
			
			button{
				font-family:Cataneo BT;
				margin-top: 11px;
				font-size: 30px;
				background:skyblue;
				border:1px solid skyblue;
				border-radius: 5px;
				font-size: 20px;
				text-align: center;
				color: #fff;
				height: 40px;
				width: 80px;
				font-weight: 70px;
				position: relative;
				transition: all 0.5s ease-in-out;

			}

			button:hover{
				background:#fff;
				transform: rotate(360deg);
				-webkit-transition:all 1s ease-in-out;
				-moz-transition:all 1s ease-in-out;
				-o-transition:all 1s ease-in-out;
				color: black;
				height: 40px;
				width: 80px;
				border:1px solid skyblue;
				border-radius:5px;
				margin-bottom: 5px;
			}
		</style>
	</head>

	<body>
		<h1>Halaman Login</h1>
		<?php if (isset($error)) : ?>
			<p style="font-style: italic; color: red;">Username / Password anda Salah</p>
		<?php endif ?>
		<form action="" method="POST">
			
			<ul>
				<li>
					<input type="text" name="username" placeholder="Username" autocomplete="off" size="30" required>
				</li>

				<li>
					<input type="password" name="password" placeholder="Password" size="30" required>
				</li>
				<li>
					<input type="checkbox" name="remember" id="remember">
					<label for="remember"> Remember Me </label>		
				</li>

				<li>
					<button type="submit" name="login">Login</button>
				</li>
			</ul>

		</form>
	</body>
</html>