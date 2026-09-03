<?php

$opcao = 2;

echo '<h1 style = "color: red;">NETFLIX</h1><br>';
echo "1 = Assistir filme<br>";
echo "2 = Assistir serie<br>";
echo "3 = Ver minha lista<br>";
echo "4 = Sair <br><br>";

switch ($opcao) {
  case 1 :
    echo "Abrindo filme...";
    break;
  case 2 :
    echo "Abrindo serie...";
    break;
  case 3 :
    echo "Abrindo sua lista..";
    break;
  case 4 :
    echo "Obrigado por usar Netflix!";
    break;
  default: 
  echo "Opção invalida";
} 
?>