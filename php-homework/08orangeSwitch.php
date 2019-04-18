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

switch ($x) {
	case "1":
			if($y>=100){
				$p=$y*20;
			}
			elseif($y>=40){
				$p=$y*25;
			}
			elseif($y<40){
				$p=$y*30;
			}
			break;

	case "2":
			if($y>=100){
			$p=$y*15;
			}
			elseif($y>=40){
			$p=$y*20;
			}
			elseif($y<40){
			$p=$y*25;
			}
			break;

	case "3":
			if($y>=100){
			$p=$y*10;
			}
			elseif($y>=40){
			$p=$y*15;
			}
			elseif($y<40){
			$p=$y*20;
			}
			break;
}

echo "總價是","$p","元喔顆顆";

?>




</body>
</html>