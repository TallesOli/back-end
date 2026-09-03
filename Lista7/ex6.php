<?php

function calcMedia($num1,$num2,$num3){
  $total = $num1 + $num2 + $num3;
  $media = $total / 3;
  return $media;
} 

echo "A média é ",calcMedia(7,9,4),"<br>"; 
echo "A média é ",calcMedia(10,9,8),"<br>";
echo "A média é ",calcMedia(8,2,5),"<br>";









?>