<?php

$nome = "John Wick";
$acesso = 3;


if ($acesso == 1){
  echo "Bem vindo $nome, você tem acesso basico ao sistema";
}
elseif ($acesso == 2){
  echo "Bem vindo $nome, você tem acesso intermediario ao sistema";
}
elseif ($acesso == 3){
  echo "Bem vindo $nome, você tem acesso administrador ao sistema";
}
else{
  echo "Acesso invalido";
}

?>