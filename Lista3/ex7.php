<?php

$valor = 200;
$valor_MinimoEntrega = 180;
$idadeMinimaAlcoolica = 17;
$idadeCliente = 19;
$quantiaPedido = 11;
$estoque = 50;
$pago = true;

$estoque_disponivel = $quantiaPedido <  $estoque;

if($idadeCliente >= 18 && $pago && $estoque_disponivel){
    echo "Compra aprovada com sucesso!";
    echo "<br>";
    echo "Quantia: $quantiaPedido";
    echo "<br>";
    echo "Valor da compra: $valor";
    echo "<br>";
    echo "Entrega gratis concedida";
}else{
    echo "Pedido reprovado! <br>";
    if ($idadeCliente < 18) echo "Menor de idade!<br>";
    if (!$pago) echo "Aguardando pagamento!<br>";
    if (!$estoque_disponivel) "Estoque indisponivel!";
}
?>