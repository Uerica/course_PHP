<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
<style type="text/css">
h2 {
	color:deeppink;
}	
</style>
</head>
<body>
<?php
echo "您的網址 : ", $_SERVER["REMOTE_ADDR"], "<br>";   
echo "目前程式 : ", $_SERVER["PHP_SELF"], "<br>";
phpinfo();
?>

</html>