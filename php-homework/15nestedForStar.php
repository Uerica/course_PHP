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
for($i=1;$i<12;$i++){
if($i<7){
    for($j=0;$j<$i;$j++){
        
    echo "*";
    }
}else{
    for($j=12;$j>$i;$j--){
    echo "*";
    }
}echo "<br>";
}

echo "<hr>";

for( $i=1;$i<=11;$i++){
    if ($i <= 6) {
      $star_num = $i;
      } else {
      $star_num = 12-$i;
    }
    for ( $j=1;$j<=$star_num;$j++) {
      echo "*";
    }
    echo "<br>";
  }

echo "<hr>";

for( $i=-5;$i<=5;$i++){
    for ( $j=1;$j<=6-abs($i);$j++) {
      echo "*";
    }
    echo "<br>";
  }


?>
</body>
</html>