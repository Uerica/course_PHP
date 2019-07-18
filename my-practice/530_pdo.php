<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php 

	try{

		$dns = "mysql:host=sql.uerica.com;port=3307;dbname=dd101g2;charset=utf8";
		$user = "dd101g2";
		$password = "dd101g2";
		$pdo = new PDO($dns, $user, $password);
		echo "連線成功";

	}catch(PDOException $e){
		echo "錯誤原因:",$e-> getMessage(),"<br>";
		echo "錯誤行號:",$e-> getLine(),"<br>";

	}




	 ?>
</body>
</html>