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
td {
   border-bottom:1px dotted deeppink;
}
</style>
</head>
<body>
<?php 
if( $errMsg != ""){
   exit($errMsg); //停止執行php程式
}
?>   
<table cellspacing='0' align='center' width="600"> 
   <tr bgcolor="#bfbfef">
   <th>書名</th>
   </tr>  
<?php
while($data = $products->fetchColumn(1)){
?>
         <tr>
         <td><?php echo $data;?></td>
  
         </tr>
<?php
}
?>
</table>

</body>
</html>