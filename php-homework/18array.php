<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h2>印出這10個數, 總和 , 最小值 , 最大值</h2>

<?php
for($i=0;$i<10;$i++){
    $data=rand(1,100);
    $arr[$i]=$data;
}
print_r($arr);
echo "<br>";

$sum = 0;
$max = 0;
$min = 100;

foreach($arr as $i => $data){
    $sum += $data;
    if($max < $data){//$max = max($max,$data);
        $max = $data;
    }
    if($min > $data){//$min = min($min,$data);
        $min = $data;
    }
}
echo "Array的總和是$sum","<br>","最大數是$max","<br>","最小數是$min","<br>";

// $sum = array_sum($arr);
// $max = max($arr);
// $min = min($arr);

// echo "陣列最大值是","$max";
// echo "陣列最小值是","$min";

?>
</body>
</html>