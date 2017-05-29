<html>
<head>
<title>MENGENAL FUNGSI STRING</title>
</head>
<body>
<?php
 echo"<b>";
      $str = "A 'quote' is <b>bold</b>
	  <a href=www.stekom.ac.id> stekom</a>";
	  // outputs: A'quote' is <b>bold</b>
	  echo "sebelum: $str <br>";  
	  echo htmlentities($str);
echo "</b>";
?>
</body>
</html>