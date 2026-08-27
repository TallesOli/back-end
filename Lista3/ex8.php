<?php

$nome = "David";
$senha = "david123";
$confirmar_senha = "david123";
$data_nasc = "09/04/2009";

if($senha == $confirmar_senha && $nome != "") {
  echo "Acesso confirmado!<br>";
  echo "Data de nascimento: $data_nasc";
}
else{
  echo "Acesso negado!";
}

?>