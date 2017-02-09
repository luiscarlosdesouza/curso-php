<?php



$cursos = array();

$cursos[] = "Lógica de Programação com Java";
$cursos[] = "Matematica discreta";
$cursos[] = "Python";
$cursos[] = "Ruby on Rails";


//var_dump ($cursos[0]);

//for($i = 0; $i < count($cursos); $i++){
//  echo "Curso na posicao $i: $cursos[$i]".PHP_EOL;


foreach ($cursos as $x => $valor) {
  echo "Chave: $x, Valor: $valor" . PHP_EOL;

$cursos[2] = "Java";


}

echo "$cursos[2]".PHP_EOL;
echo count($cursos) . PHP_EOL;




 ?>
