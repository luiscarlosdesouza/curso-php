<?php

require_once 'Cliente.php';
require_once 'CartaoDeCredito.php';

$cliente = new Cliente;
$cliente->nome = "Rafael Constantino";
$cliente->codigo = 123;


$cartao = new CartaoDeCredito;
$cartao->numero = 11111;
$cartao->dataDeValidade = "10/10/2020";
$cartao->cliente = $cliente;

echo "Cliente: $cliente->nome - Conta: $cliente->codigo - Cartao: $cartao->numero - Validade: $cartao->dataDeValidade ".PHP_EOL


 ?>
