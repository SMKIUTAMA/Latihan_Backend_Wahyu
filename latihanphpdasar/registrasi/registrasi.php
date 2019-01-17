<?php 
include 'functions.php';

if (isset($_POST["register"])) {
	
	if (regis($_POST) > 0) {
		echo"<script>
				alert('User baru telah ditambahkan')
			 </script>";
	}else{
		mysqli_error($conn);
	}

}

?>

<html>
	<head>
		<title>Registrasi</title>
		<style>
			input{
				background-color:white;
				color:black;
				font-size: 18px;
				font-family: times new roman;
				padding: 5px;
			}
			
			button{
				background-color: white; 
				color: red;
				font-family: cooper black;
				font-size: 15px;
				padding: 5px;
			}

			button:hover{
				background-color:;
				color: lightgreen;
			};
		</style>
	</head>

	<body>
		<h1> Halaman Registrasi</h1>

		<form action="" method="POST">
		<ul>
			<li>
				<input type="text" name="username" placeholder="Username" autocomplete="off" size="30" required>
			</li>
			<li>
				<input type="password" name="password" placeholder="Password" size="30" required>
			</li>
			<li>
				<input type="password" name="password2" placeholder="Confirm Password" size="30" required>
			</li>
		</ul>

		<ul>
			<li><button type="Submit" name="register">Register</button></li>
		</ul>
		</form>
	</body>
</html>