<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<style type="text/css">
	td{
		width: 150px;
	}
</style>

</head>
<body>
	
<?php
echo "<table  border='1' cellspacing='0'>";
$x=0;
for($a=1;$a<=10;$a++){
	// echo $a;
	if($a%2>=1){
		echo "<tr><td>","$a";
	}

	if($a%2==0){
		echo "<td>","$a","<tr>";
	}
}

echo "</table>";



?>




</body>
</html>