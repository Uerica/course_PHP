<?php
   $errMsg = "";
   try {
       $dsn = "mysql:host=localhost;port=3306;dbname=books;charset=utf8";
        $user = "RouRouyo";
      $password = "19820623";
       $options = array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_CASE => PDO::CASE_NATURAL);
       $pdo = new PDO($dsn, $user, $password, $options);
       $sql = "select * from products";
       $products = $pdo->query($sql);
      
   } catch (PDOException $e) {
       $errMsg .=  $e->getMessage(). "<br>"; 
       $errMsg .=  $e->getLine(). "<br>";    
   }
?>  
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
if( $errMsg != ""){
   exit($errMsg);
}
?>   
<table border='1' cellspacing='0' align='center'>   
<?php
while($prodRow = $products->fetchObject()){
?>
         <tr>
         <td><?php echo $prodRow->psn?></td>
         <td><?php echo $prodRow->pname?></td>
         <td><?php echo $prodRow->price?></td>
         <td><?php echo $prodRow->author?></td>     
         </tr>
<?php
}
?>
</table>

</body>
</html>