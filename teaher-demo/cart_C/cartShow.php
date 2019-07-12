<?php
//啟用session
ob_start();
session_start(); 
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
a{
	text-decoration:none;
}
a:hover{
	text-decoration:underline;
}
</style>
</head>
<body>
<table align="center" width="700">
	<tr bgcolor="#bfbfef"><th>書號</th><th>書名</th><th>價格</th><th>數量</th><th>小計</th><th>異動</th></tr>
<?php 

if( isset($_SESSION["pname"]) === false || count($_SESSION["pname"])==0){ //尚無購物資料或購物車中的商品被刪光了
  echo "<tr><td colspan='5' align='center'>尚無購物資料</td></tr>";
}else{  //有購物資料
	$total = 0;
	foreach( $_SESSION["pname"] as $psn => $data){ 
		$subTotal = $_SESSION["price"][$psn] * $_SESSION["qty"][$psn];  //計算小計
		$total = $total + $subTotal;  //計算總計
	 ?>	
	 <form action="cartUpdate.php">
	 	<input type="hidden" name="psn" value="<?php echo $psn;?>">
			<tr>
				<td><?php echo $psn;?> </td>
				<td>
					<a href="prodQuery.php?psn=<?php echo $psn;?>">
					<?php echo $_SESSION["pname"][$psn];?>
					</a>	
				</td>
				<td><?php echo $_SESSION["price"][$psn];?></td>
				<td><input type="text" name="qty" value="<?php echo $_SESSION["qty"][$psn];?>"></td>
				<td><?php echo $subTotal?></td>
				<td>
					<input type="submit" name="btnUpdate" value="修改">
					 <input type="submit" name="btnDelete" value="刪除">
				</td>
			</tr>
	</form>		
	<?php 
	} //foreach
	echo "<tr><td colspan='6' align='center'>總計 : ", number_format($total), "</td></tr>"; 
}//if

?>

</table>  

   <center><a href="prodList.php">繼續瀏覽</a></center><br>
   <center><a href="cartToDb.php">下單</a></center><br>
</body>
</html>