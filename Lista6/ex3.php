<?php

$opcao = 2;

echo "Bem vindo a ALARES INTERNET <br>";
echo "1 = Suporte Tecnico<br>";
echo "2 = Segunda via de fatura<br>";
echo "3 = Falar com atendente";
echo "4 = Sair <br><br>";

switch ($opcao) {
  case 1 :
    echo "Você escolheu: Suporte Tecnico";
    break;
  case 2 :
    echo "Você escolheu: Segunda via de fatura";
    break;
  case 3 :
    echo "Você escolheu: Falar com atendente";
    break;
  case 4 :
    echo "Obrigado por usar alares!";
    break;
  default: 
  echo "Opção invalida";
} 
?>