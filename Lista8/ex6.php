<?php

$contador = 0;
for($i = 1 ; $i <= 50 ; $i++){
  if($i % 3 == 0){
    echo "$i é multiplo de 3<br>";
    $contador ++;
  }
}

echo "<br> Quantia de multiplos de 3: $contador";





?>