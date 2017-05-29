<html>
<head>
<title>MENGENAL FUNGSI STRING</title>
</head>
<body>
<?php
echo"<b>";
    $foo = 'hello world!</h1>';
	$foo = ucfirst($foo); // Hello World!
	$bar = 'HELLO WORLD!';
	$bar = ucfirst($bar); // HELLO WORLD!
	$bar = ucfirst(strtolower($bar)); // Hello World!
	echo"$foo <br>$bar";
echo"</b>" ;
?>
</body>
</html>