<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>exec</title>
</head>
<body>
	<?php 

	try{
		$dns = "mysql:host=localhost;port=3306;dbname=dd101;charset=utf8";//連上伺服器
		$user = "RouRouyo";
		$password = "19820623";
		$options = array(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$pdo = new PDO($dns, $user, $password, $options);
		echo "連線成功";
		$sql = "update emp set sal -= 1000 where empno = 7369"; //這是錯的唷
		$affectedRow = $pdo->exec($sql);
		echo "啾咪";

	}catch(PDOException $e){
		echo "錯誤原因:",$e-> getMessage(),"<br>";
		echo "錯誤行號:",$e-> getLine(),"<br>";
	}
	 ?>
	
</body>
</html>