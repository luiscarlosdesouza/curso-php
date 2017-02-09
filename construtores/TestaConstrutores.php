<?php

require_once 'Agencia.php';

$agencia = new Agencia(1234, "Itau");
$agencia2 = new Agencia(5678, "Bradesco");


echo "Banco1: $agencia->nome Agencia: $agencia->numero" . PHP_EOL;
echo "Banco2: $agencia2->nome Agencia: $agencia2->numero" . PHP_EOL;





 ?>
