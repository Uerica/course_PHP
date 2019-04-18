 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<style type="text/css">
	
	h2{
		color:pink;
	}

</style>

</head>
<body>


<h2>break</h2>

	<?php 

	$total=0;

	for($i=1;$i<1000;$i++){
		$total=$i+$total;
		if($total>1000){
		echo "1+2+....$i=$total<br>";
		break;
	}
}

?>


<h2>continue</h2>

<?php

$total=0;

for($i=1;$i<=50;$i++){
	if($i%3 !=0){
		continue;
	}
	echo "$i,<br>";
	$total += $i;
}

echo "總和:","$total";

?>


<h2>while</h2>

<?php 

$i=0;

while ($i<= 10) {
	echo "I love php<br>";
	$i++;
}

?>


<h2>印1.2.3....10</h2>

<?php 

$i=1;

while ($i<= 10) {
	echo "$i<br>";
	$i++;

}

 ?>


<h2>計算1+2+3....50</h2>

<?php 

	$i=1;
	$total=0;

	while ($i<=50) {
	$total += $i;
    $i++;
	}

	echo "$total";

	?>


	<h2>印出1-50間3的倍數以及總和</h2>

	<?php 

	$i=3;
	$total=0;
	while ($i<=50) {
		echo "$i<br>";
		$total += $i;
		$i += 3;

	}

	echo "$total";

	?>

	<h2>do while 印1.2.3....10</h2>

	<?php 
	$i=1;
	do{
		echo "$i<br>";
		$i++;

	}while ($i< 10);

	echo "$i<br>";

	?>

    
	<h2>do while計算1+2+3....50</h2>
	<?php
	$i=1;
	$total=0; 
	do{
		$total+=$i;
		$i++;
	}while ($i<=50);

	echo "$total"

	?>


	<h2>do while印出1-50間3的倍數以及總和</h2>
	<?php
	$i=3;
	$total=0; 
	do{
		echo "$i<br>";
		$total += $i;
		$i += 3;
	}while ($i<=50);
		echo "$total";



	 ?>





	
</body>
</html>