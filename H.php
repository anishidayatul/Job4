<html>
<head>
<title>MENGENAL FUNGSI STRING</title>
</head>
<body>
<?php
echo"<b>";
	    $str="Kampus saya adalah STEKOM";
		echo "$str<br>";
		$ganti = str_replace("saya","kami",$str);
		echo $ganti;
echo "</b>";
?>
</body>
</html>