<html>
<head>
	<title>Soal Nomer 3</title>
</head>
	<body>
		<h1>Array</h1>
		<form action="tugas.php" method="POST">
			<?php 
			for ($a=0; $a<=8 ; $a++) 
			{ 
				echo "<input type='text' size='5' name='angka[$a]'> ";
			}
			 ?>
			<input type="submit" value="Tampilkan">
		</form>
	</body>
</html>