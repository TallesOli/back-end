<?php

$altura = 1.65;
$peso = 73;
$resultado = $peso / ($altura * $altura) ;

echo "Resultado: $resultado";

if ($resultado < 19) {
  echo "Abaixo do peso.";
}
elseif ($resultado >= 19 && $resultado <= 24.9){
  echo "Peso ideal.";
}
elseif ($resultado >= 25 && $resultado <= 29.9){
  echo "Sobrepeso.";
}
elseif ($resultado >= 30 && $resultado <= 34.9){
  echo "Obesidade grau 1.";
}
elseif ($resultado >= 35 && $resultado <= 39.9){
  echo "Obesidade grau 2.";
}
else{
  echo "Obesidade grau 3.";
}
?>