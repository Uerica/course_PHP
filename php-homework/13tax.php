<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php 
$inc=$_GET["income"];
$tax=0;

if($inc>=10310001){
	$tax=$inc*0.45-1345100;
}
elseif($inc>=4530001 && $inc<=10310000){
	$tax=$inc*0.4-829600;
}
elseif($inc>=2420001 && $inc<=4530000){
	$tax=$inc*0.3-376600;
}
elseif($inc>=1210001 && $inc<= 2420000){
	$tax=$inc*0.2-134600;
}
elseif($inc>=540001 && $inc<= 1210000){
	$tax=$inc*0.12-37800;
}
else($inc>=0 && $inc<=540000){
	$tax=$inc*0.05;
}

echo "你的稅是","$tax","元喔顆顆";



 ?>


	
</body>
</html>