<html><head><title>Statement If</title></head>
<body>
<?php echo"<form action=\"$php_selt\" method=\"post\">";
$nilail=$_POST['nilai'];
echo"Berapa Nilai PHPmu? :
<input name=\"nilail\" value=\"$nilail\" size=\"3\" type=\"text\" value=\
<input name=\"cek\" type=\"submit\" value=\"Cek\"> </form>";
if($_POST['cek']) //perintah untuk menguji penekanan tombol Cek
{ echo'<br><h1>";
	if($nilail=="")
		{ echo"Anda Belum menentukan Nilai..!"; }
	elseif(!is_numeric($nilail)) //jika nilail tidak bertype numerik
	
</body>
</html>
