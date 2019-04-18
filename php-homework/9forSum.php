<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<?php

$a=$_GET["nb"];

$sum=0;
$y=0;
$z=0;

for($x=1;$x<=$a;$x++){
	$sum=$sum+$x;

	if($x%2>=1){
		$y=$x+$y;
	}

	if($x%2==0){
		$z=$x+$z;

	}
}

echo "總和是:","$sum","<br>";
echo "奇數和是:","$y","<br>";
echo "偶數和是:","$z","<br>";


 ?>



</body>
</html>