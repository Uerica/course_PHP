<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>發牌</h2>

<?php
//$cards = range(1,52)
for($i=0;$i<52;$i++){
    $arr[$i] = $i+1;
}

echo "洗牌前:";
print_r($arr);
echo "<br>";

shuffle($arr);

echo "洗牌後:";
print_r($arr);
echo "<br>";

foreach($arr as $i => $data){
    if($i < 13){
        $player[0][$i] = $data;
    }elseif($i >= 13 && $i < 26){
        $player[1][$i-13] = $data; 
    }elseif($i >= 26 && $i < 39){
        $player[2][$i-26] = $data; 
    }else{
        $player[3][$i-39] = $data;
    }

}
print_r($player);

echo "<table border=1>";
for($i=0;$i<4;$i++){
    echo "<tr>";

    echo "<td>","玩家",$i+1,"</td>";

    for($j=0;$j<13;$j++){
        echo "<td>",$player[$i][$j],"</td>";
    }
    echo "</tr>";
}
echo "</table>";


echo "<hr>";

$cards = range(1,52);

$players = array(array());
shuffle($cards);
print_r($cards);

foreach($cards as $i => $card){
    $player_index = $i % 4;
    $players[$player_index][floor($i/4)]=$card;
}

echo "<table border=1>";
for($i=0;$i<4;$i++){
    echo "<tr>";

    echo "<td>","玩家",$i+1,"</td>";

    for($j=0;$j<13;$j++){
        echo "<td>",$players[$i][$j],"</td>";
    }
    echo "</tr>";
}
echo "</table>";



?>
</body>
</html>