<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
</head>
<body>
	<?php 
	echo "<h2>嗨依</h2>";
	echo "hello";
	echo "姓名 : ", "Sara", "<br>", "消費總額 : ", 600, "元<br>";
    printf("<h2>Welcome to PHP~</h2>");
  	printf("Hi %s ,您目前消費總額為%x <br>", "Mary", 15000);
  	printf("Hi %s ,您目前消費總額為%d <br>", "Mary", 15000);
  	printf("地址:%s縣 %s市 %s路 %s號","桃園","中壢","中央","15");
  	printf("使用者:%s %s號","外星人","100");

	?>
	<?php 
echo 0x321,"<br>";
echo 0.123e4,"<br>";
	 ?>
	 <?php 
$married = false;
echo "true : ", true, "<br>"; 
echo "false : ", false, "<br>"; 
	  ?>

	  <?php 
echo 'I am Sara', "<br>"; 
echo 'I am "Sara"', "<br>"; 
echo 'I am \'Sara\'';
echo 'I am \\Sara\\', "<br>"; 

echo "I am 'ququ'","<br>";
echo "I am \"ququ\"","<br>";
echo "I am \\ququ\\","<br>";
echo "I am ququ \n","<br>";

$name = 'Ann';

echo 'hi $name<br>';
echo "hi$name<br>";
echo "hi{$name}<br>";
 ?>

<?php 
 $address = "Tainan";
 echo "地址 : ", $address, "<hr>";
  ?>

地址 : <?php echo $address; ?> <hr>
地址 : <?=$address?> <hr>
 <?php  
$address = "Taipei";
echo "地址 : ", $address, "<hr>";
  ?>
<!-- 短網址 -->
地址 : <?php echo $address; ?> <hr>
地址 : <?=$address?> <hr>

<!-- 常數命名辦法
<?php
const 命名= "值";
echo 命名
?> -->

<!-- <?php
// $a=16;
// echo "$a/4=",$a/4,"<br>";
// echo "$a%5=",$a%5,"<br>";
// echo $a*3%5;
 
// $b = 3;
// echo $b>=2,"<br>";
// echo $b<=1,"<br>";
// echo "123"===123,"<br>";
// echo "123"==123,"<br>";

// echo "3"+3,"<br>";
// echo 3+3,"<br>";
// echo "3"-3,"<br>";
// echo 3-3;

// $c =10;
// $e =7;

// echo $c+$e>=17,"<br>";
// echo $c+$e>=6,"<br>";
// echo 123+456;


// echo !(!3<=0);

// echo (!(!3));
?> -->

<?php 

echo "台北市"."內湖區";

$x=5;
$x += 2;
echo "x:$x";

$x .= 2;
echo "x:$x";

$x -= 20;
echo "x:$x","<hr>";

echo $x=2*3+5;

$x=50;
$x /= 2;
echo "x:$x","<hr>";

$a=$b=$c=100;
echo 
"a=$a","<br>";
echo 
"b=$b","<br>";
echo 
"c=$c","<br>","<hr>";

$x=10;
$y= ++$x + 100;
echo 
"$x","<br>","$y","<br>";

$x=10;
$y= $x++ + 100;

echo
"$x","<br>","$y","<br>";

$a=10;
$b= ++$a + $a++ + $a++ + ++$a + ++$a + $a++;
// $b= 11 + 11 + 12 + 14 + 15 + 15 =78
// $a=16  

echo "$a","<br>","$b","<br>","<hr>";
 ?>
 




</body>
</html>