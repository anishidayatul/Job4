<html>
<head>
<title>MENGENAL FUNGSI STRING</title>
</head>
<body>
<?php
echo"<b>";
$pesan = "<div style=\"font-size:70\">hacked</div>";
echo"$pesan <br>"; // sebelum strip_tags()
echo strip_tags($pesan) ; // sesudah strip_tags()
echo "</b>";
?>
</body>
</html>