<?php

require_once 'Funcionario.php';


$funcionario = new Funcionario;
$funcionario->nome = "Rafael Consentino";
$funcionario->salario = 1000;

echo "Funcionário: $funcionario->nome - Salário: $funcionario->salario" . PHP_EOL;

$aumento = 100;

echo "Você teve um aumento de $aumento " .PHP_EOL;

$funcionario->aumentaSalario($aumento);

echo "Seu novo salário é de: $funcionario->salario" . PHP_EOL;



 ?>
