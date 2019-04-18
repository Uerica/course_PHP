<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		

h2{
			color:red;
		}
table,tr,td{

	border: 1px solid #CCC;
}

.hi{
	color: orchid;

}
.trcolor{
	text-align:center;
	background-color:orange;
font-weight:bold;

}

.tdblod{
	font-weight:bold;
	background-color:pink;
}
    </style>

</head>

<body>
	<?php 
echo "<h2>好媒媒班級通訊錄</h2>",
"<table>
<tr class=trcolor>
	<td><b>學號</td>
	<td><b>姓名</td>
	<td><b>電話</td>
</tr>
<tr>
	<td>94951001</td>
	<td>黃一丁</td>
	<td>0911000333</td>
</tr>
<tr>
	<td>94951002</td>
	<td>劉二毛</td>
	<td>0922999887</td>
</tr>
<tr>
	<td>94951003</td>
	<td>張大化</td>
	<td>0933555779</td>
</tr>
</table>";

$name = "小丸子";
$age = "秘密";
$address = "漫畫走廊";

echo "<h2 class=hi>個人小檔案</h2>","
<table>
	<tr>
		<td class=tdblod>姓名:</td>
		<td>$name</td>
	</tr>
	<tr>
		<td class=tdblod>年齡</td>
		<td>$age</td>
	</tr>
	<tr>
		<td class=tdblod>地址</td>
		<td>$address</td>
	</tr>
</table>"
	 ?>
</body>
</html>