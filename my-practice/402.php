<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	</title>
<style type="text/css">
	h2{
		color:#FF8888;
	}

</style>



</head>

<body>

	<h2>雙重迴圈 印9個 1-9</h2>

<?php 	
for($i=1;$i<=9;$i++){
		for($j=1;$j<=9;$j++){
			echo "$j";

		}
			echo "<br>";
	}
?>	

<h2>雙重迴圈 九九乘法表</h2>
<?php
echo "<table border=1>";

for($i=1;$i<=9;$i++){
	
	echo "<tr>";
	
	for($j=1;$j<=9;$j++){
		echo "<td>";
		echo "$i*$j=",$i*$j;
		echo "</td>";
	
	

	}echo "</tr>";
}
echo "</table>";

 ?>


 <h2>陣列</h2>
 <?php 
$arr=array(11,22,33);
for($i=0;$i<3;$i++){
	echo $arr[$i],"<br>";
}
  ?>


<h2>陣列字串</h2>
 
 <?php 

$arr=array("台北","台南","高雄","屏東");

	for($i=0;$i<4;$i++){
	echo $arr[$i],"<br>";
}

 ?>



 <h2>count函數</h2>

 <?php

$arr=array(11,22,33);
$cou=count($arr);

	for($i=0;$i<$cou;$i++){
	
	echo $arr[$i],"<br>";
}

  ?>

  <h2>foreach()</h2>
  
  <?php 

$arr=array(11,22,33);
$arr[5]=100;
$cou=count($arr);

foreach( $arr as $i => $data){
echo "$i => $data<br>";

}

?>

<h2>陣列 直接指定</h2>
<?php 
$arr=array(11,22,33);
$arr[]=44;
$arr[]=55;

foreach ($arr as $i => $data) {
	echo $data,"<br>";
}

 ?>



<h2>陣列 直接建立</h2>
<?php 
$arr2[]=100;
$arr2[]=200;
$arr2[]=300;

foreach ($arr2 as $data) {
	echo $data,"<br>";	
}

 ?>


<h2>關聯性陣列</h2>
<?php 
$zip=array("台北市"=>"001","台南市"=>"002","高雄市"=>"003");
$zip["桃園市"]="004";
foreach ($zip as $key => $data) {
	echo "$key => $data","<br>";
}
 ?>

<h2>找資料有無在陣列中</h2>

<?php

$arr=array(11,22,33,44,55,66,77);
$a=99;
$find=false;

foreach ($arr as $i => $data) {
	if($data==$a){
		echo "[$i] => $data";
		$find=true;
	}
}
if($find==false){
	echo "$a,找不到哭哭";
}

?>


<h2>陣列函數</h2>

<?php 

$arr=array(11,22,33,44,55,66);
$total=0;

print_r($arr);
echo is_array($arr);


 ?>



 <h2>打亂陣列</h2>

 <?php 
$arr=array(11,22,33,44,55,66);
echo "洗牌前:",print_r($arr),"<br>";



echo "洗牌後:",shuffle($arr);print_r($arr);

?>

<h2>in_array()</h2>

<?php 
$arr=array(1,2,3,4,5,6,7);
$data=5;

echo in_array($data,$arr);

?>

<h2>二維陣列</h2>

<?php 
$arr=array(array(1,2,3,4),array(11,22,33,44),array(41,42,43,44));
echo "<table border=1>";
for($i=0;$i<3;$i++){
	echo "<tr>";
		for($j=0;$j<4;$j++){
			echo "<td>",$arr[$i][$j],"</td>";


		}echo "</tr>";
}
echo "</table>";

 ?>

 <h2>二維陣列foreach</h2>
<?php 

$arr=array(array(1,2,3,4),array(11,22,33,44),array(41,42,43,44));

echo "<table border=1>";

foreach ($arr as $i => $row) {
	echo "<tr>";
	foreach ($row as $j => $data) {
		// echo "<td>",$data,"</td>";
		echo "<td>",$arr[$i][$j],"</td>";
		
	}echo "</tr>";
}echo "</table>";


?>

<h2>二維陣列平均</h2>


<?php 
$arr=array(array(1,2,3,4),array(11,22,33,44),array(41,42,43,44));

echo "<table border=1>";

for($i=0;$i<3;$i++){
	$total=0;
	echo "<tr>";
	
	for($j=0;$j<4;$j++){
		echo "<td>",$arr[$i][$j],"</td>";
		$total = $total + $arr[$i][$j];

		}echo "<td>",$total/4,"</td>","</tr>";
}echo "</table>";

 ?>


















</body>
</html>
