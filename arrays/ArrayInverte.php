<?php


for($i = count($argv) -1; $i > 0; $i--)
{

$invertido[] = $argv[$i];

echo "$argv[$i]" . PHP_EOL;


}

foreach ($invertido as $x ) {
  echo "$x" . PHP_EOL;
}



?>
