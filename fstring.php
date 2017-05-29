<html>
<head>
<title>MENGENAL FUNGSI STRING</title>
</head>
<body>
<?php
echo"<br>";
	$a=100; $b=50;
	echo" \$a=100 <br> \$b=50<br><br>";
	echo" Hasil a x b = ".($a*$b)."<br>";
	echo" Hasil a + b = ".($a+$b)."<br>";
	echo" Hasil a - b = ".($a-$b)."<br>";
	echo" Hasil a / b = ".$a/$b."<br>";
	echo" Hasil a % b = ".$a%$b."<br><br><br>";
	
	echo"Apakah a <= b ? <br> Jwb:";
		if($a<=$b)
			{echo"benar";}
			else
			{echo"salah";}
	echo"<br><br>Apakah a == b ? <br> Jwb:";
		if($a==$b)
			{echo"benar ";}
			else
			{echo"salah";}
	echo"<br><br>Apakah a <> b ? <br> Jwb:";
		if($a<>$b)
			{echo"benar ";}
			else
			{echo"salah";}
	echo"</b>";
?>
</body>
</html>
