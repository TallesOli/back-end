<?php

$senhacorreta = "1234";
$senha = "1111";
$tentativas = 0;


$contador = 0;
while ($tentativas < 3) {
  $tentativas++;
  if($senha == $senhacorreta){
    echo "Acesso permitido";
  }
  else{
    echo "Senha incorreta!<br>";
  }

}





?>