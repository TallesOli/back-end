<?php

$opcao = 2;

echo '<h1 style = "color: purple;">Aventuras Suinas</h1><br>';
echo "1 = Jogar<br>";
echo "2 = Ver personagens <br>";
echo "3 = Ver Ranking<br>";
echo "4 = Configurações<br>";
echo "5 = Sair <br><hr>";

switch ($opcao) {
  case 1 :
    echo "<h2>------JOGO INICIANDO------</h2>";
    break;
  case 2 :
    echo "<h3>Personagens: <br>
              -Javali Rançoso🐗<br>
              -Leitão Poderoso🦔<br>
              -Pelotão Titã🐖<br>
              -Porca Natalina🐷🎄</h3>";
    break;
  case 3 :
    echo "<h3>Ranking:
              1.SternScorp1on<br>
              2.Sr.GuiGuiBR<br>
              3.CarlosBerserk<br>
              4.JPLeito</h3>";
    break;
  case 4 :
    echo "Abrindo Config.";
    break;
  case 5 :
    echo "Fechando...";
    break;
  default: 
  echo "Opção invalida";
} 
?>