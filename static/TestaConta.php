<?php

require_once 'Conta.php';

echo "Contador: " . Conta::$contador . PHP_EOL;  //Acessar atribudo da classe


$x = new Conta;
$x->numero = 11;
$x->saldo = 600;

$y = new Conta;
$y->numero = 12;
$y->saldo = 800;

$z = new Conta;
$z->numero = 13;
$z->saldo = 1000;

echo "Contador no final: " . Conta::$contador . PHP_EOL;

$x->zeraContador();

echo "Contador após zeraContador: " . conta::$contador . PHP_EOL;


 ?>
