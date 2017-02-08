<?php

require_once 'Conta.php';

$conta = new Conta;
$conta->numero = 13;

$conta->deposita(1000);
//Deposito de 700

echo "Saldo: $conta->saldo" . PHP_EOL;

$valorDoSaque = 200;
$resultado = $conta->saca($valorDoSaque);
echo "Cliente solicitou saque de: $valorDoSaque" . PHP_EOL;


var_dump($resultado);

if($resultado){
  echo "Saque efetuado com sucesso!" . PHP_EOL;

}
  else {

    echo "Saldo Insuficiente!" . PHP_EOL;

  }

echo "Saldo após saque: $conta->saldo" . PHP_EOL;

 ?>
