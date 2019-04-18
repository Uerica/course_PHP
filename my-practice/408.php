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

	<h2>就是不說hello world</h2>
	<?php 
	function hihi(){
		echo "早安";
	}

	hihi();

	?>

	<h2>有一參數值 沒有回傳值</h2>

	<?php 
	function hello($name){

	echo "嗨唷",$name,"<br>";
	
	}

	hello("曲翑");
	 ?>


	 <h2>有一參數值 有回傳值</h2>

	 <?php 
	 function sum2num($a,$b){
	 	$c=$a+$b;
	 	return $c;
	 }

	 echo "10+20=",sum2num(10,20);

	  ?>

	<h2>function + 陣列</h2>
	  <?php 

	  function sumMany($arr){
	  	
	  	$total=0;

	  	for($i=0;$i<count($arr);$i++){
	  		$total += $arr[$i];
	  	}
	  		return $total;
	  }

	  echo "10+20=",sumMany(array(10,20)),"<br>";
	  echo "10+20+30=",sumMany(array(10,20,30)),"<br>";
	  echo "10+20+30+40=",sumMany(array(10,20,30,40)),"<br>";
	  echo "10+20+30+40+50=",sumMany(array(10,20,30,40,50)),"<br>";



	   ?>


	   <h2>傳址呼叫</h2>

	   <?php 
	   function sum($a,$b){
	   $total=$a+$b;
	   $a=$a+100;
	   $b=$b+100;

	   return $total;
	}
	    
	    $x=10;
	    $y=20;

	   echo "$x+$y=",sum($x,$y),"<br>";
	   echo $x,"<br>";
	   echo $y,"<br>";


	    ?>

		


	     

			<h2>令區域變數成全域變數</h2>

	     <!--  <?php 

	      $amount=0;

	      function getAmount(){
	      global $amount;
	      $amount=1000;
	      }

	      function showAmount(){
	      	 global $amount;
	      	echo "營業額:",$amount,"<br>";
	      }

	      getAmount();
	      showAmount();

	       ?> -->

	       <h2>利用陣列令區域變數成全域變數</h2>

<?php 
 $amount=0
function getAmount(){
	     $GLOBALS["amount"]=100000;
	      }

	      function showAmount(){
	      	echo "營業額:",$GLOBALS["amount"],"<br>";
	      }

	      getAmount();
	      showAmount();





 ?>

	

</body>
</html>