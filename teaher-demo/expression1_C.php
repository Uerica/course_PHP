<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
<style type="text/css">
h2 {
	color:deeppink;
}	
</style>
</head>
<body>
	<h2>算術</h2>
<?php
   $a = 14;
   echo "$a*4 : ", $a*4 , "<br>";
   echo "$a/4 : ", $a/4 , "<br>";
   echo "$a%4 : ", $a%4 , "<br>";
?> 

    <h2>比較</h2>
<?php
   $a = 14;
   echo "$a > 4 : ", $a > 4 , "<br>"; //true
   echo "$a < 4 : ", $a < 4 , "<br>"; //false 
   echo "3 <= 4 : ", 3 <= 4 , "<br>"; //true

   echo "0 === false : ", 0 === false , "<br>"; //false
   echo "0 == false : ", 0 == false , "<br>";  //true

   $mm = 3;
   echo "是本月的壽星嗎 ? ", $mm == 3 ,"<br>";
?> 


    <h2>邏輯</h2>
<?php
   $a = 14;
   echo "$a > 4 and 10>5 ?  ", $a > 4 and 10>5 , "<br>"; //true and true --> true
   echo "$a < 4 or 10>5 ?  ", $a < 4 or 10>5 , "<br>"; //false or true --> true 
   echo "3 <= 4 xor 10>5 ?  ", 3 <= 4 xor 10>5 , "<br>"; //true xor true --> false
   echo "! false  ?  ", ! false  , "<br>"; //true
   echo "! 3  ?  ", ! 3  , "<br>"; //false
   echo "! 3 <= 4  ?  ", ! 3 <= 4  , "<br>"; // false<=4 --> true
   echo "! (3 <= 4)  ?  ", ! (3 <= 4)  , "<br>"; // ! true -->false
?> 
</body>
</html>