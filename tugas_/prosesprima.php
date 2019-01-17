<?php

if (isset($_POST['jumlah'])) {
	
	$bilangan = $_POST["bilangan"];

	$hasil = "";

	// echo $bilangan
	for ($a=1; $a < $bilangan; $a++) { 
		$x = 0; // total pembagi
		for ($b=1; $b < $bilangan; $b++) {  
			if ($a % $b == 0) {
				$x += 1; //total pembagi bertambah 1
			}
		}

		// jika pembagi kurang dari 2 atau sama dengan 2
		if ($x >= 2) {
			$hasil .= $a. ', ';
		}
	}
}

echo "<body align='center'>
		<div style='background-color: #eaeaea;
				width: 400px;
				margin:10px auto;
				color: lightskyblue;'>
		<table style='margin:auto; padding: 10px;'>
			<h1>Progam Bilangan Prima</h1>
			<tr>
				<td>.$hasil</td>
			</tr>
			<tr>
				<td align='center'><a href='tugas.php' style='text-decoration:none;'>Ulangi</a></tr>
			</tr>
		</table>
		</div>
	</body>";

?>