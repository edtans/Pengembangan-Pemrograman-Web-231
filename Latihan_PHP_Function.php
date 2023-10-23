<?php
	echo "<h3>Contoh Function tanpa Parameter</h3>";
	#Sub program berjenis prosedur
	function Panggilan1()
	{
		echo "Hello World";
	}
	#Sub program berjenis fungsi
	function Panggilan2()
	{
		return "Hello World";
	}
	#jalankan Sub program berjenis prosedur
	Panggilan1();
	echo "<br>";
	#jalankan Sub program berjenis fungsi
	echo Panggilan2();
	
	echo "<hr>";
	echo "<h3>Contoh Function dengan Parameter</h3>";
	#Sub program berjenis prosedur
	function Tambah(int $x, int $y)
	{
		echo ($x + $y);
	}
	#jalankan Sub program berjenis prosedur
	Tambah(5,3);
	echo "<br>";
	#Sub program berjenis fungsi
	function Tambah2(float $x, float $y)
	{
		return ($x + $y);
	}
	#jalankan Sub program berjenis prosedur
	echo Tambah2(4.5,6.2);
?>