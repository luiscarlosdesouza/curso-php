<?php

require_once 'Cliente.php';
require_once 'CartaoDeCredito.php';
require_once 'Conta.php';

$agencia = new Agencia;



$conta = new Conta;
$conta->numero = 123;
$conta->saldo = 1000.00;
$conta->limite = 500;
$conta->agencia = $agencia;



echo "Cliente: $cliente->nome - Conta: $cliente->codigo - Cartao: $cartao->numero - Validade: $cartao->dataDeValidade ".PHP_EOL








 ?>
