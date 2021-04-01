<?php 

function cari($angka, $sama):bool 
	{
	foreach($angka as $value)
		{
		if($sama== $value)
		{
			return true;
		}

		}	return false;

		}

		$angka = [4,6,5,6,9,10,5,18,10];
		$sama = 5;
		echo "Menampilkan ";
		print_r($angka);echo '<br>'.'Mencari angka '.$sama.' Dalam array.<br>Status : ';
		if(cari($angka,$sama) == 1)
			{
				echo "Ada";
			}else{
				echo "Tidak ada";
			}

?>