<?php

function verifAge($idade){
  if($idade >= 18){
    return "maior de idade pode tirar carta<br>";
  }
  else {
    return "Menor de idade não pode tirar carta<br>";
  }
} 
echo verifAge(44);
echo verifAge(15);
echo verifAge(12);
echo verifAge(18);
echo verifAge(23);
echo verifAge(80);
echo verifAge(11);





?>