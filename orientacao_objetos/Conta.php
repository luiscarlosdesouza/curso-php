<?php
class Conta {
  public $numero;
  public $saldo;
  public $limite;
  public $agencia;
}

class Cliente {
  public $conta;
  public $nome;


}

$conta1 = new Conta;
$conta1->numero="1234";
$conta1->saldo=500.00;
$conta1->limite=800.00;

$cliente = new Cliente;
$cliente->nome="Luis";

echo "Conta Número: $conta1->numero - Saldo: R$ $conta1->saldo - Limite: R$ $conta1->limite <br>".PHP_EOL;

echo "Cliente: $cliente->nome - Conta: {$cliente->conta1->numero} - "

?>
