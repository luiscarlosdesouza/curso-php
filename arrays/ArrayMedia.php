<?php



$soma = 0;


for($i = 1; $i < count($argv); $i++)
{
  $soma += $argv[$i];

}

$media = $soma / (count($argv) -1);

echo "Media dos Valores digitados:" . PHP_EOL;
echo "$media" . PHP_EOL;


//$arr = array(40, 60, 5);
//echo array_sum($argv[$i]) / count(array_filter($argv[$i])) . PHP_EOL;











 ?>
