<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>
<?php 
try {
   //連線	
   $dsn = "mysql:host=localhost;port=3306;dbname=sample;charset=utf8";
   $user = "root";
   $password = "root";
   $options = array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_CASE => PDO::CASE_NATURAL);
   $pdo = new PDO($dsn, $user, $password, $options);
   
   //收到網頁上送來的資料 
   // $amount = $_REQUEST["amount"];
   // $salValue = $_REQUEST["salValue"];
   $amount = 100;
   $salValue = 5000;
   //.....................................
   $sql = "update emp set sal = sal + ? where sal < ?  "; //準備好指令
   $product = $pdo->prepare($sql); //編譯好指令
   $product->bindValue(1, $amount);//代入資料, 第2個參數可以是 literal表示法(如100), 也可以是變數
   $product->bindValue(2, $salValue);//代入資料
   $product->execute();

   //.....................................
   $sql = "update emp set sal = sal + :amount where sal < :salValue  "; //準備好指令
   $product = $pdo->prepare($sql); //編譯好指令
   $product->bindValue(":amount", $amount);//代入資料
   $product->bindValue(":salValue", $salValue);//代入資料
   $product->execute();

   //.....................................
   // $sql = "update emp set sal = sal + ? where sal < ?  "; //準備好指令
   // $product = $pdo->prepare($sql); //編譯好指令
   // $product->bindParam(1, $amount);//代入資料, 第2個參數只能是變數
   // $product->bindParam(2, $salValue);//代入資料
   // $product->execute();

   //.....................................
   // $sql = "update emp set sal = sal + :amount where sal < :salValue  "; //準備好指令
   // $product = $pdo->prepare($sql); //編譯好指令
   // $product->bindParam(":amount", $amount);//代入資料
   // $product->bindParam(":salValue", $salValue);//代入資料
   // $product->execute();   


   echo "異動成功<br>";	
} catch (PDOException $e) {
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	// echo "系統暫時發生狀況，請通知系統維護人員<br>";
}
?>    
</body>
</html>