<?php
session_start();
$errMsg = "";
try {
	require_once("connectBooks.php");

   $sql = "select * from member where memId=:memId and memPsw=:memPsw";
   $members = $pdo->prepare( $sql );
   $members->bindValue(":memId", $_POST["memId"]);
   $members->bindValue(":memPsw", $_POST["memPsw"]);
   $members->execute();

    if( $members->rowCount() == 0 ){//找不到
        $errMsg .= "帳密錯誤, <a href='login.html'>重新登入</a><br>";
    }else{
        $memRow = $members->fetch(PDO::FETCH_ASSOC);
        //登入成功,將登入者的資料寫入session
        $_SESSION["memNo"] = $memRow["no"];
        $_SESSION["memId"] = $memRow["memId"];
        $_SESSION["memName"] = $memRow["memName"];
        $_SESSION["email"] = $memRow["email"];

        //檢查是否從別的功能跳轉過來
        if( isset($_SESSION["where"]) === true){
          $to = $_SESSION["where"];
          unset($_SESSION["where"]);
          header("location:$to");
        }
    }   

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
	exit( $errMsg);
}

if($members->rowCount() == 0 ){
  echo '<center>帳密錯誤, <a href="login.html">請重新登入</a></center>';
}else{
  $memRow = $members->fetch(PDO::FETCH_ASSOC);
  echo $memRow["memName"], "您好~~<br>";
}
   
?>      
</body>
</html>