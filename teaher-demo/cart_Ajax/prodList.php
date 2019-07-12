<?php
session_start();
$errMsg = "";
try {
	require_once("connectBooks.php");

	$sql = "select * from products";
	$products = $pdo->query($sql);
	$prodRows = $products->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
	echo "錯誤 : ", $e -> getMessage(), "<br>";
	echo "行號 : ", $e -> getLine(), "<br>";
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
a{
	text-decoration:none;
}
a:hover{
	text-decoration:underline;
}
div.prodTitle{
	position:relative;
	width:900px;
	margin:auto;
	text-align:center;
	background-color:#bfbfef;
}

div.prodRow{
	position:relative;
	width:1000px;
	margin:auto;
	text-align:center;
}

div.prodRow span:nth-child(1),div.prodTitle span:nth-child(1){
	width:10%;
	border:1px solid;
	display:inline-block;
}

div.prodRow span:nth-child(2),div.prodTitle span:nth-child(2){
	width:42%;
	border:1px solid;
	display:inline-block;
}

div.prodRow span:nth-child(3),div.prodTitle span:nth-child(3){
	width:10%;
	border:1px solid;
	display:inline-block;
}
div.prodRow span:nth-child(4),div.prodTitle span:nth-child(4){
	width:10%;
	border:1px solid;
	display:inline-block;
}div.prodRow span:nth-child(5),div.prodTitle span:nth-child(5){
	width:12%;
	border:1px solid;
	display:inline-block;
}

form .btnMinus, form .btnPlus{
/*	width:10px;
	height:10px;
	display:inline-block;*/

	background-color:lightblue;

}

/*div.prodRow span:nth-child(6),div.prodTitle span:nth-child(6){
	width:15%;
	border:1px solid;
	display:inline-block;
}*/
</style>
</head>
<body>

<div style="background-color:#bfbfef;text-align:right"><span id="btnShowCart">檢視購物車</span></div><br>

<div id="productsPanel">
<?php 
foreach($prodRows as $i => $prodRow){
	//檢查商品是否已在購物車中，若是，則數量以購物車中的為主
	$psn = $prodRow["psn"];
	if( isset($_SESSION["cart"]) && isset($_SESSION["cart"][$psn])){
		$qty = $_SESSION["cart"][$psn]["qty"];
	}else{
		$qty = 0;
	}
?>
	<div class="prodRow">
		<span><?php echo $prodRow["psn"]?></span>
		<span>
			<a href="prodQuery.php?psn=<?php echo $prodRow["psn"]?>">
			<?php echo $prodRow["pname"]?>
			</a>	
		</span>
		<span><?php echo $prodRow["price"]?></span>
		<span><?php echo $prodRow["author"]?></span>
		<span style="background-color:pink">
		<form>
		    <button class="btnMinus">-</button>
		    <input type="number" name="qty" value="<?php echo $qty?>" style="width:50px" min="0">
		    <button class="btnPlus">+</button>
			<input type="hidden" name="psn" value="<?php echo $prodRow["psn"]?>">
			<input type="hidden" name="pname" value="<?php echo $prodRow["pname"]?>">
			<input type="hidden" name="price" value="<?php echo $prodRow["price"]?>">	
		</form>	
		</span>
	</div>
<?php 
}
?>
</div>
<br><br>
<div id="cartList" style="display:none"></div>

<script type="text/javascript" src="cart.js">
</script>
</body>
</html>