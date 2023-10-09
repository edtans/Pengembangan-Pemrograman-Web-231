<?php
	echo "loop dengan for <br>";
	for ($i = 0; $i < 3; $i++)
		echo $i . "<br>";
	
	echo "i terakhir adalah $i Paham ya?";
	
	echo "<hr>";
	
	echo "loop dengan while <br>";
	$i = 0;
	while ($i < 3)
	{
		echo $i . "<br>";
		$i++;
	};
	
	echo "i terakhir adalah $i Paham ya?";
	
	echo "<hr>";
	
	echo "loop dengan do...while <br>";
	$i = 0;
	do
	{
		echo $i . "<br>";
		$i++;
	}
	while ($i < 3);
	echo "i terakhir adalah $i Paham ya?";

	echo "<hr>";
	
	echo "Membuat bintang 3x3 <br>";
	
	for ($baris = 0; $baris < 3; $baris++)
	{
		$kolom = 0;
		while ($kolom < 3)
		{
			echo "* ";
			$kolom++;
		}
		echo "<br>";
	}
	
	echo "<hr>";
	
	echo "Membuat segitiga siku-siku <br>";
	
	for ($baris = 0; $baris < 3; $baris++)
	{
		$kolom = 0;
		while ($baris >= $kolom)
		{
			echo "* ";
			$kolom++;
		}
		echo "<br>";
	}
	
	echo "Membuat segitiga siku-siku terbalik <br>";
	
	for ($baris = 0; $baris < 3; $baris++)
	{
		$kolom = 0;
		while (true)
		{
			if ($baris <= $kolom)
			{
				echo "*&nbsp;";
				if ($kolom == 2)
				{
					break;
				}
			}
			else
			{
				echo "&nbsp;&nbsp;";
			}
			$kolom++;
		}
		echo "  ";
		echo "<br>";
	}
	
	echo "<hr>";
	
	for ($baris = 0; $baris < 3; $baris++)
	{
		$kolom = 0;
		echo "<pre>";
		while ($kolom < 3)
		{
			if ($baris > $kolom)
			{
				echo "  ";
			}
			else
			{
				echo "* ";
			}
			
			$kolom++;
		}
		echo "</pre>";
		echo "<br>";
	}
	
	
	
	
	
	


?>