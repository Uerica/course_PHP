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
	<tr bgcolor="pink"><th>書號</th><th>書名</th><th>價格</th><th>數量</th><th>小計</th><th>異動</th></tr>
<?php 
if( isset($_SESSION["pname"]) === false || count($_SESSION["pname"])==0){

  echo "<tr><td colspan='15' align='center'>尚無購物資料</td></tr>";

}else{ 

	$total = 0;
	foreach( $_SESSION["pname"] as $psn => $data){
		$subTotal = $_SESSION["price"][$psn] * $_SESSION["qty"][$psn];
		$total = $total + $subTotal;
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
	}

	echo "<tr>
	<td colspan='6' align='center'>總計:
	",number_format($total),"
	</td>
</tr>";
}

?>

</table>  

   <center><a href="prodList.php">繼續瀏覽</a></center><br>
   <center><a href="cartToDb.php">下單</a></center><br>
</body>
</html>