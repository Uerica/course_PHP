<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
	h2{
		color:#FF8888;
	}

</style>
</head>
<body>

<h2>ceil</h2>

<?php 

echo "ceil(3.5):",ceil(3.5);
echo "ceil(4):",ceil(4);

?>


<h2>strpos</h2>

<?php 
$str="helloworld";
echo "strpos('$str','he')","[",strpos($str,'he'),"]","<br>";
echo "strpos('$str','ab')",strpos($str,'ab');

$a="world";
echo "strpos('$str','$a')","[",strpos($str,$a),"]","<br>";
if(strpos($str,$a)===false){
	echo "$a","找不到";
}else{
	echo "$a","找得到";
}
?>

<h2>字串</h2>

<?php 
$str="helloworld";
$hihi="你好啊";
echo "strlen($str)",strlen($str),"<br>";
echo "strlen($hihi)",strlen($hihi),"<br>";
echo mb_strlen($hihi);
 ?>
	

<h2>日期</h2>
<?php 
$x=time();
echo "現在是",$x,"<br>";
echo date("Y-m-d H:h:i D",$x);

$btd=mktime(0,0,0,1,1,2000);
echo date("'D'是星期D", $btd) , "<br>";


 ?>











</body>
</html>