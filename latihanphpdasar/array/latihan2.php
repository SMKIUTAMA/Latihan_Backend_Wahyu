<?php 
// Pengulangan pada array
// for / foreach

$angka = [1,2,3,4,5,6,7,8,9,10];
?>
<html>
	<head>
		<title>Latihan 2</title>
		<style>
			.kotak{
			width: 50px;
			height: 50px;
			background-color:lightblue;
			margin: 3px;
			text-align: center;
			line-height: 50px;
			float: left; 
			}

		.clear{ clear: both; }
		</style>
	</head>

	<body>

		<?php for ($i=0; $i < (count($angka)) ; $i++) : ?>
			<div class="kotak"><?php echo $angka[$i]; ?></div>
		<?php endfor; ?>

		<div class="clear"></div>

		<?php foreach ($angka as $a) { ?>
			<div class="kotak"><?php echo $a; ?></div>
		<?php } ?>

		<div class="clear"></div>

		<?php foreach($angka as $a) : ?>
			<div class="kotak"><?= $a; ?></div>
		<?php endforeach; ?>




	</body>
</html>