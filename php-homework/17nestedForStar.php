<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>印1+2+3+4+5</h2>
<?php
for( $i=1;$i<=10;$i++){
        $x=0;
    for($j=1;$j<=$i;$j++){
        $x=$x+$j;
    if($j==$i){
        echo "$j";
    }else{
        echo "$j+";
    }

    }echo "=$x","<br>";
}

echo "<hr>";

for( $i=1;$i<=10;$i++){
    $x=0;
for($j=1;$j<=$i;$j++){
    $x=$x+$j;
    echo ($j==$i)? "$j" : "$j+";

}echo "=$x","<br>";
}

?>
</body>
</html>