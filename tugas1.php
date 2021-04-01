<html>
<head>
	<title>Soal Nomer 1</title>
</head>
	<body>
		<h1>Bintang</h1>
		<form method="POST" action="">
			Masukan angka <input type="text" name="bintang"><br>
			<input type="submit" name="submit" value="submit">
		</form>
	</body>
</html>

<?php 
if (isset($_POST['submit'])) 
{
	$star = $_POST['bintang'];
	for($a=1; $a<=$star; $a++)
	{
    for($b=1; $b<=$a; $b++)
    {
        echo '&nbsp';
    }
    for($c=$star; $c>=$a; $c-=1){
        echo '*';
    }
    echo "<br/>";
}
}
 ?>
