<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

$x=$_GET["grade"];
$y=$_GET["kg"];

if($x=="1"){
	if($y>=100){
		$p=$y*20;
	}
	elseif($y>=40){
		$p=$y*25;
	}
	elseif($y<40){
		$p=$y*30;
	}
}
if($x=="2"){
	if($y>=100){
		$p=$y*15;
	}
	elseif($y>=40){
		$p=$y*20;
	}
	elseif($y<40){
		$p=$y*25;
	}
}

if($x=="3"){
	if($y>=100){
		$p=$y*10;
	}
	elseif($y>=40){
		$p=$y*15;
	}
	elseif($y<40){
		$p=$y*20;
	}
}







echo "價錢是","$p","元唷";
 ?>
	
</body>
</html>