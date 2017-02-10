<?php
  require_once 'Funcionario.php';
  require_once 'Gerente.php';
  require_once 'Secretario.php';

  $gerente = new Gerente;
  $gerente->nome = "Luis Carlos";
  $gerente->salario = 12000;
  $gerente->senha = 1234;
  $gerente->aumentaSalario(200);
  $gerente->mostraSalario();


  $secretario = new Secretario;
  $secretario->nome = "Marcelo Modesto";
  $secretario->salario = 1500;
  $secretario->ramal = 25;


echo "Gerente: $gerente->nome Salario: $gerente->salario Senha: $gerente->senha Novo salario: $gerente->mostraSalario()" . PHP_EOL;
echo "Secretario: $secretario->nome Salario: $secretario->salario Ramal: $secretario->ramal" .  PHP_EOL;

 ?>
