<?php

require_once 'Cliente.php';
require_once 'CartaoDeCredito.php';

$cliente = new Cliente;
$cliente->nome = "Luis Carlos";
$cliente->codigo = 17;

$cartao = new CartaoDeCredito;
$cartao->numero = 4567;
$cartao->dataDeValidade = "10/05/2018";
$cartao->cliente = $cliente;


echo "Cliente: $cliente->nome - Conta: $cliente->codigo - Cartao: $cartao->numero - Validade: $cartao->dataDeValidade ".PHP_EOL








 ?>
