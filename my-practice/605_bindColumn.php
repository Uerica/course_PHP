<?php
   $errMsg = "";
   try {
       $dsn = "mysql:host=localhost;port=3306;dbname=books;charset=utf8";
       $user = "root";
       $password = "root";
       $options = array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_CASE => PDO::CASE_NATURAL);
       $pdo = new PDO($dsn, $user, $password, $options);
       $sql = "select * from products";
       $products = $pdo->query($sql);
       $products->bindColumn("psn", $psn); 
       $products->bindColumn("pname", $pname); 
       $products->bindColumn("price", $price); 
       $products->bindColumn("author", $author); 

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
   <th>書號</th>
   <th>書名</th>
   <th>價格</th>
   <th>作者</th>     
   </tr>  
<?php
while($products->fetch(PDO::FETCH_ASSOC)){
?>
         <tr>
         <td><?php echo $psn;?></td>
         <td><?php echo $pname;?></td>
         <td><?php echo $price;?></td>
         <td><?php echo $author;?></td>     
         </tr>
<?php
}
?>
</table>

</body>
</html>