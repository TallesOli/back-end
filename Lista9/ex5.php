<?php
$soma = 0;

$contatos = ["14 999888777","14 666555444","14 333222111"];
foreach ($contatos as $numeros){
  echo $numeros , "<br>";
  $soma++;
}
echo "Você possui $soma contatos";
?>