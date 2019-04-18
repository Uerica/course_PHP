<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php


echo "帳號:",$_REQUEST["memId"],"<br>";

echo "英文能力:","<br>";

if(isset($_REQUEST["ability"])===true){
	foreach ($_REQUEST["ability"] as $i => $data) {
		echo "$data";
		}

	}else{
		echo "英文能力沒選";
}
echo "專長:","<br>";
if(isset($_REQUEST["specialty"])===true){
	foreach ($_REQUEST["specialty"] as $i => $data) {
		echo "$data";
	}
	}else{
		echo "專長沒選";
	}

?>

</body>
</html>