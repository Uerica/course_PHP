<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style type="text/css">
	
td{
	border: 1px #ccc solid;
	width: 100px;
}

</style>
</head>
<body>
<?php 

echo "<table>
			<tr>
				<td>姓名</td>
				<td>",$_GET["memName"],"</td>
			</tr>
			
			<tr>
				<td>帳號</td>
				<td>",$_GET["memId"],"</td>
			</tr>
			
			<tr>
				<td>密碼</td>
				<td>",$_GET["memPsw"],"</td>
			</tr>

			<tr>
				<td>email</td>
				<td>",$_GET["email"],"</td>
			</tr>

			<tr>
				<td>性別</td>
				<td>",$_GET["sex"],"</td>
			</tr>
			<tr>
				<td>生日</td>
				<td>",$_GET["birthday"],"</td>
			</tr>
			<tr>
				<td>電話</td>
				<td>",$_GET["tel"],"</td>
			</tr>"

 ?>
	
</body>
</html>