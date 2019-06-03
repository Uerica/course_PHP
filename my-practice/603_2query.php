<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
   $errMsg = "";
   try {
   	 $dsn = "mysql:host=localhost;port=3306;dbname=books;charset=utf8";
   	 $user = "root";
   	 $password = "root";
   	 $options = array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_CASE => PDO::CASE_NATURAL);
   	 $pdo = new PDO($dsn, $user, $password, $options);
   	 $sql = "select * from products";
   	 $pdoStatement = $pdo->query($sql);

       echo "<table border='1' cellspacing='0' align='center'>";
   	 while($row = $pdoStatement->fetch(PDO::FETCH_ASSOC)){
?>
<!-- 在此結束改用html -->

         <tr>
         <td><?php echo $row["psn"];?></td>
         <td><?php echo $row["pname"];?></td>
         <td><?php echo $row["price"];?></td>
         <td><?php echo $row["author"];?></td>    
         </tr>
<?php
       }

       echo "</table>";
   	 
   } catch (PDOException $e) {
   	 $errMsg .=  $e->getMessage(). "<br>";	
   	 $errMsg .=  $e->getLine(). "<br>";		
   }

   if($errMsg !=""){
      echo $errMsg;
   }
?>  	
</body>
</html>