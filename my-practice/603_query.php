<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

	try{

		$dns = "mysql:host=localhost;port=3306;dbname=books;charset=utf8";
		$user = "RouRouyo";
		$password = "19820623";
		$options = array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_CASE => PDO::CASE_NATURAL);
		$pdo = new PDO($dns, $user, $password, $options);
		$sql = "select * from products";
   	 	$pdoStatement = $pdo->query($sql);
   	 	$row = $pdoStatement->fetch();
   	 	echo $row[0], "<br>";
	   	 echo $row[1], "<br>";
	   	 echo $row[2], "<br>";
	   	 echo $row["psn"], "<br>";
	   	 echo $row["pname"], "<br>";
	   	 echo $row["price"], "<br>";   
	   	 echo "<hr>";	

	   	 $row = $pdoStatement->fetch();
	   	 echo $row[0], "<br>";
	   	 echo $row[1], "<br>";
	   	 echo $row[2], "<br>";
	   	 echo $row["psn"], "<br>";
	   	 echo $row["pname"], "<br>";
	   	 echo $row["price"], "<br>";   
	   	 echo "<hr>";

	   	 $row = $pdoStatement->fetch();
	   	 echo $row[0], "<br>";
	   	 echo $row[1], "<br>";
	   	 echo $row[2], "<br>";
	   	 echo $row["psn"], "<br>";
	   	 echo $row["pname"], "<br>";
	   	 echo $row["price"], "<br>";   
	   	 echo "<hr>";
   	 
   } catch (PDOException $e) {
   	 $errMsg .=  $e->getMessage(). "<br>";	
   	 $errMsg .=  $e->getLine(). "<br>";		
   }
	 ?>
</body>
</html>