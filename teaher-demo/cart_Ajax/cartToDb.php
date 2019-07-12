<?php 
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>
<?php 
//---------------
$_SESSION["memId"] = "Sara";
$_SESSION["memNo"] = 1;
$_SESSION["email"] = "Sara168@gmail.com";
//---------------

//檢查是否已登入
if( isset($_SESSION["memId"]) === false){ //尚未登入
	$_SESSION["where"] = $_SERVER["PHP_SELF"];
	echo "尚未登入, <a href='login.html'>請登入</a>";
    //echo "<script>window.alert('尚未登入, 請登入');location.href='login.html';</script>";
}else{ //已登入
	try {
	    require_once("connectBooks.php");
	    
	    $pdo->beginTransaction(); //啟動交易管理
	    //寫入訂單主檔
	    $sql = "insert into bookorder values (null, :orderMemNo, NOW(), :email, '0')";
	    $bookorder = $pdo->prepare($sql);
	    $bookorder->bindValue(":orderMemNo", $_SESSION["memNo"]);
	    $bookorder->bindValue(":email", $_SESSION["email"]);
	    $bookorder->execute();

	    //寫入訂單明細
		$orderNo = $pdo->lastInsertId();
		$sql = "insert into orderitems values ($orderNo, :productNo, :quantity)";
		$orderitems = $pdo->prepare( $sql );
		foreach( $_SESSION["cart"] as $psn => $cartItem ){
			$orderitems->bindValue(":productNo", $psn);
			$orderitems->bindValue(":quantity", $cartItem["qty"]);
			$orderitems->execute();
		}
		$pdo->commit(); //確認交易
		//刪除購物車資料
	    unset($_SESSION["cart"]);

		echo "下單成功，您的訂單編號為$orderNo<br>~~";
	} catch (PDOException $e) {
		$pdo->rollBack();
		echo "錯誤原因 : ", $e -> getMessage(), "<br>";
		echo "錯誤行號 : ", $e -> getLine(), "<br>";
	}//try ... catch
} 
?>    
<center><a href="prodList.php">繼續購買</a></center>

</body>
</html>