<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>印12345</h2>
<?php
for( $i=1;$i<=6;$i++){
    for($j=1;$j<=$i;$j++){
        echo "$j";
    }echo "<br>";
}

?>
</body>
</html>