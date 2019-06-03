<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php 

	try{

		$dns = "mysql:host=localhost;port=3306;dbname=dd101;charset=utf8";
		$user = "RouRouyo";
		$password = "19820623";
		$pdo = new PDO($dns, $user, $password);
		echo "連線成功";

	}catch(PDOException $e){
		echo "錯誤原因:",$e-> getMessage(),"<br>";
		echo "錯誤行號:",$e-> getLine(),"<br>";

	}




	 ?>
</body>
</html>