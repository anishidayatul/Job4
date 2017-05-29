<html>
<head>
<title>MENGENAL FUNGSI STRING</title>
</head>
<body>
<?php
 echo"<b>";
	 $email ='emailmu@yahoo.com';
	 $domain = strstr($email, '@');
	 echo $domain."<br>"; // prints yahoo.com
	 $email = strstr($email, 'm');
	 echo $email; // prints mailmu@yahoo.com
echo "</b>";
?>
</body>
</html>