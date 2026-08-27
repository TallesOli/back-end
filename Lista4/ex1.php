<?php

$idade = 16;
$ingresso = "sim";

echo "Bem vindo ao Cineamor! <br>";

if($idade > 18 && $ingresso == "sim"){
  echo "Pode entra e assistir o filme!";
}
else {
  echo "Idade não permitida ou sem ingresso!";
}

?>