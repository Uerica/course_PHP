<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

$s=$_GET["price"]*$_GET["quantity"];

if($s>=500){
$s=$s*0.9;
}
echo "$s";
 ?>
	
</body>
</html>