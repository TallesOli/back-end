<?php

$array1 = ["cor" => "vermelho", 2, 4];
$array2 = ["a", "b", "cor" => "verde", "forma" => "trapezoide", 4];

$result = array_merge($array1, $array2);

print_r($result);
?>