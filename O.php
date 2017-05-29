<html>
<head>
<title>MENGENAL FUNGSI STRING</title>
</head>
<body>
<?php
echo"<b>";
    $foo = 'hello world!';
	$foo = ucwords($foo); // Hello World!
	$bar = 'HELLO WORLD!';
	$bar = ucwords($bar); // HELLO WORLD!
	$bar = ucwords(strtolower($bar)); // Hello World!
	echo"$foo <br>$bar";
echo"</b>" ;
?>
</body>
</html>