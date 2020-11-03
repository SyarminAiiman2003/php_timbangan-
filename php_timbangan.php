<html>
<title> PHP-Timbangan </title>

<body>
<form action="PHP_timbangan.php" method="POST"> //kesalahan panggil fail
Masukkan berat anda <input type="TEXT" name="nilai" value="0" /> //kesalahan pada "nilai" 
<input type="submit" value="Hasil" />
<form>
	
	<?php
	if (POST[nilai] >= 80) //kesalahan
	{
	 $result = "Anda Berat"
	}
	ELSE 
	{
	 $result = "Berat anda Adalah Normal";
	}
	>                     //kesalahan pada penutup
	Mesej Untuk Anda : 
	<?PHP
	ECHO "$result";
	?>

</body>
</html>