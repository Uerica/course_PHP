<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php

	$i=1;
	$x=0;
	while($i){
		$x=rand(0,10);
		echo "$x";
		if($x==0){
			break;
		}
	}



	 ?>

	
</body>
</html>