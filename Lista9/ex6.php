<?php
$quanti = 0;

$playlist = ["Terra Seca","Romanos 12","Casa","Fogo Santo","Eu Recorro a Ti","Crux Sacra"];
foreach ($playlist as $musica){
  echo $musica , "<br>";
  $quanti = count ($playlist);
}
echo "Você possui $quanti musicas";
?>