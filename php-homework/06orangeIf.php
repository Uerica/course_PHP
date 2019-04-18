<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

$x=$_GET["price"]*$_GET["quantity"];

if($x>=1000){
$x=$x*0.7;
}

elseif($x>=500){
	$x=$x*0.9;
}


echo "折扣後是:","$x","元唷";
 ?>
	
</body>
</html>