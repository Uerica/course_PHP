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
<?php
echo "您是", $_GET["mm"],"月的壽星<br>";   //前端送來的資料為字串型別,即便您輸入的資料是數字

$mm=3;
echo "您是3月的壽星嗎? ", $_GET["mm"]===3 ,"<br>";  //"3" === 3, false
echo "您是3月的壽星嗎? ", $_GET["mm"]==3 ,"<br>";  //"3" == 3, true
?>      
</body>
</html>