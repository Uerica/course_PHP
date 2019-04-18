<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>印通訊錄2</h2>
<?php
$arr = Array(Array("學號","姓名","電話","地址"),Array("94951001","黃一丁","0911000333","中壢市中大路1號"),Array("94951002","劉二毛","0922999887","高雄市中山路2號"),Array("94951003","張大化","0933555779","台北市師大路3號"));
echo "<h2>好媒媒班級通訊錄</h2>";
echo "<table border=1>";
for($i=0;$i<4;$i++){
    
    echo "<tr>";
    for($j=0;$j<4;$j++){
    echo "<td>",$arr[$i][$j],"</td>";
    
    }echo "</tr>";
    
}echo "</table>";

?>
</body>
</html>