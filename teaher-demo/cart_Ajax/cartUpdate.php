<?php 
session_start();
$psn = $_REQUEST["psn"];
if($_REQUEST["qty"] != 0){ //數量不為0, 直接改
	$_SESSION["cart"][$psn]=array("pname"=>$_REQUEST["pname"],"price"=>$_REQUEST["price"],"qty"=>$_REQUEST["qty"]);
}else{ //數量若為0, 則將其從購物車中移除
	if(isset($_SESSION["cart"]) && isset($_SESSION["cart"][$psn])){
		unset($_SESSION["cart"][$psn]);
	}
}

//將購物車回傳
if(isset($_SESSION["cart"])==false){
	echo "{}";
}else{
	echo json_encode($_SESSION["cart"]);	
}
?>