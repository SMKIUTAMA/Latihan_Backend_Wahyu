<html>
	<head>
		<title>Latihan array</title>
	</head>
	<style>
		.kotak{
			width: 40px;
			height: 40px;
			background-color: aqua;
			text-align: center;
			line-height: 40px;
			margin:3px;
			float: left;
			transition: 1s;
		}

		.kotak:hover{
			transform: rotate(360deg);
			border-radius: 50%;
		}
		
		.clear{clear: both; }
	</style>

	<body>

<?php $angka = [
		[1,2,3],
		[4,5,6],
		[7,8,9]
	]; 
?>
	
<?php foreach ($angka as $a) : ?>
	<?php foreach ($a as $k) :?>
		<div class="kotak"><?= $k; ?></div>
	<?php endforeach; ?>
	<div class="clear"></div>	
<?php endforeach; ?>

	</body>
</html>