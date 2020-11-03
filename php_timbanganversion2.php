<html>
<title> PHP-Timbangan </title>

<body>
<form action="php_timbangan.php" method="POST">
Masukkan berat anda <input type="TEXT" name="nilai1" value="0" />
<input type="submit" value="Hasil" />
<form>
	
	<?PHP
	if ($_POST[nilai1] >= 80) 
	{
	 $result = "Anda Berat";
	}
	else
	{
	 $result = "Berat anda Adalah Normal";
	}

	?> 
	Mesej Untuk Anda : 
	<?PHP
	ECHO "$result";
	?>
</body>
</html>