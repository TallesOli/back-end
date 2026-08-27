<?php

$email = "leitao@gmail.com";
$senha = "1234";

echo "Bem vindo ao Facebook! <br>";

if($email == "leitao@gmail.com" && $senha == "1234" ){
  echo "Acesso liberado";
  header("Location: https://www.facebook.com") ;
}
else {
  echo "Email ou senha incorretos!";
}

?>