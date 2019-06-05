<?php
$errMsg = "";
try {
   	require_once("connectBooks.php");
   	$sql = "update products set pname=:pname, price=:price, author=:author, pages=:pages, image=:image 
   	        where psn=:psn";
   	$products = $pdo->prepare( $sql ); 
   	$products->bindValue(":psn", $_REQUEST["psn"]);       
   	$products->bindValue(":pname", $_REQUEST["pname"]);
   	$products->bindValue(":price", $_REQUEST["price"]);
   	$products->bindValue(":author", $_REQUEST["author"]);
   	$products->bindValue(":pages", $_REQUEST["pages"]);
   	$products->bindValue(":image", $_REQUEST["image"]);
   	$products->execute();
   } catch (PDOException $e) {
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	// echo "系統暫時發生狀況，請通知系統維護人員<br>";   	
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
if( $errMsg !="" ){
	exit($errMsg);
}

echo "異動成功<br>";   
?>      

<a href="prodUpdate.html">繼續修改</a>
</body>
</html>