<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

		<?php

	$x=0;
	$total=0;
	for($i=1;$i<=10;$i++){
			$x=rand(0,10);
		echo "$x<br>";
		$total=$total+=$x;
}

$total=$total*100;
echo "$total";



	 ?>
	
</body>
</html>