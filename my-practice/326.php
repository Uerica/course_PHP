<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		h2{
			color:	#FF8888;
		}

	</style>
</head>
<body>


<h2>if成立 單敘述</h2>
<?php 

$a=80;

if($a>=60)
	echo "通過!","<hr>";

else
	echo "不通過!","<hr>";
 ?>

 <h2>if不成立 單敘述</h2>

<?php 

$a=30;

if($a>=60)
	echo "通過!","<hr>";

else
	echo "不通過!","<hr>";
 ?>

<h2>if成立 多敘述</h2>

<?php 

$a=80;

if($a>=60){
	echo "通過!","<br>";
	echo "阿不就好棒棒","<br>";
	echo "證書列印中..","<br>","<hr>";
}

else{
	echo "不通過!","<br>";
	echo "回家洗洗睡","<br>","<hr>";
}
 ?>
 <h2>if不成立 多敘述</h2>

<?php 

$a=30;

if($a>=60){
	echo "通過!","<br>";
	echo "阿不就好棒棒","<br>";
	echo "證書列印中..","<br>","<hr>";
}

else{
	echo "不通過!","<br>";
	echo "回家洗洗睡","<br>","<hr>";
}
 ?>
<h2>if/else</h2>
<?php  

$a=60;

if($a>=90){
	$b="A";
	echo "等級為$b","<br>";
	echo "太棒了","<br>","<hr>";
}

elseif($a>=80){
	$b="B";
	echo "等級為$b","<br>","<hr>";
}
	

elseif($a>=70){
	$b="C";
	echo "等級為$b","<br>","<hr>";
}

elseif($a>=60){
	$b="D";
	echo "等級為$b","<br>";
	echo "呵呵還行","<br>","<hr>";
}

else{
	$b="E";
	echo "不及格","<br>","<hr>";
}

// echo "等級為$b";
?>

<h2>if/else</h2>
<?php  

$a=90;

if($a>=90)
	$b="A";


elseif($a>=80)
	$b="B";

	

elseif($a>=70)
	$b="C";


elseif($a>=60)
	$b="D";

else
	$b="E";


echo "等級為$b","<hr>";

?>

<h2>if/else</h2>

<?php 
$type="2";$e=true;

if($type=="1"){
	$m=5000;
if($e=true){
	$m=$m+1000;
}
}

elseif($type=="2"){
	$m=4000;
if($e==true){
	$m=$m+500;
}
}

elseif($type=="3"){
	$m=3000;
}

echo "補助款:{$m}元";

 ?>

 
 <h2>switch</h2>

<?php 
$lowtype="3";
$e=true;

switch ($lowtype) {
	case "1":
		$s=6000;
		break;
	case "2":
		$s=3000;
		break;
	case "3":
		$s=1000;
		if($e==true){
			$s=$s+5000;
		}
		break;

	// default:
	// 	$s=0;
}

echo "補助款為 $s 元";

 ?>

<h2>ifelse表示</h2>
<?php 
$avg=80;

if($avg>=60)
	echo "通過";

else
	echo "不通過";


 ?>

 <h2>三元運算子</h2>

<?php  
 $avg=30;

echo $avg >= 60 ? "通過":"不通過";
?>

<h2>for</h2>

<?php 

for( $e=1 ; $e <= 5 ; $e++)

	echo "我要五隻大象","<br>";
 ?>

<h2>for1.2.3...10</h2>
<?php 
for($e=1 ; $e <= 10 ; $e++)
	echo "$e",".","<br>";
 ?>

<h2>for1.2.3...10 W1</h2>
<?php 
for($e=1 ; $e <= 9 ; $e++)
	echo "$e",".";
	echo "$e";
 ?>

 <h2>for1.2.3...10 W2</h2>
<?php 
for($e=1 ; $e <= 9 ; $e++)
	if($e <=9 ){
		echo "$e",".";
	}

	echo "$e";

	?>


<h2>1+2+3...+50</h2>

<?php
$b=0;
for($a=1 ; $a <= 50 ; $a++)

$b=$b+$a;

echo "1+2+3...+50的總和:$b","<br>";

 ?>


<h2>1~50間3倍數總和</h2>

 <?php 
$x=0;
for($i=1 ;$i <= 16; $i++)

$x=$x+$i*3;

echo "1到50間3的倍數總和:$x";

?>

<h2>1~50間3倍數總和</h2>

 <?php
$x=0;
$y=50/3;
for($i=1 ;$i <= $y; $i++)

$x=$x+$i*3;

echo "1到50間3的倍數總和:$x";

?>

<h2>1~50間3倍數總和 W1</h2>

<?php

$x=0;
for($i=1;$i<=50;$i++)
	if($i%3==0){
		echo "$i","<br>";
	$x=$x+$i;
	}
		echo "$x";
?>

<h2>1~50間3倍數總和 W2</h2>

<?php
$x=0;
for($i=3;$i<=50;$i=$i+3){
	echo $i,"<br>";

	$x=$x+$i;
}
echo "$x";
?>

<h2>印在表格裡</h2>
<?php
echo "<table border='1' cellspacing='0' align='center'>";
for($i=1;$i<=10;$i++){
	echo "<tr><td>$i<tr>";
}
echo "</table>";
 ?>

	
</body>
</html>