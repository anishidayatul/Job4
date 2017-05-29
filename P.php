<html>
<head>
<title>MENGENAL FUNGSI STRING</title>
</head>
<body>
<?php
echo"<b>";
    $text = "The quick brown fox jumped over the lazy dog.";
	$newtext = wordwrap($text, 20 , "<br><br>");	
	echo $newtext;
echo"</b>" ;
?>
</body>
</html>