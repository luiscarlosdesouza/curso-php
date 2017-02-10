<?php

require_once 'avo.php';
require_once 'filho.php';
require_once 'neto.php';


$avo = new Avo;
$avo->nome = "Joao Cleber Santos";
$avo->idade = 70;
$avo->hobby = "Le livro";


$filho = new Filho;
$filho->nome = "Paulo Eduardo Santos";
$filho->idade = 50;
$filho->hobby = "Joga bola";

$neto = new Neto;
$neto->nome = "Pedrinho Santos";
$neto->idade = 11;
$neto->hobby = "Joga videogame";


echo "Familia Santos com o Avô: $avo->nome Idade: $avo->idade Hobby: $avo->hobby  {$avo->fuma()} {$avo->transa()}"  . PHP_EOL;
echo "Familia Santos com o Filho: $filho->nome Idade: $filho->idade Hobby: $filho->hobby  {$filho->fuma()} {$filho->transa()}" . PHP_EOL;
echo "Familia Santos com o Neto: $neto->nome Idade: $neto->idade Hobby: $neto->hobby   {$neto->fuma()}  {$neto->transa()}" . PHP_EOL;


 ?>
