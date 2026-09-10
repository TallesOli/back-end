<?php
$nm = 0;
$lista = [1, 2, 3, 4, 11, 6, 7, 8, 9, 10];
foreach ($lista as $n){
  if ($n > $nm) {
    $nm = $n;
  }
  echo $n , "<br>";
}
echo "O maior numero é $nm";
?>