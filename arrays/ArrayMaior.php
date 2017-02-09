<?php

$maior = 0;


for($i = 1; $i < count($argv); $i++)
{

  if ($argv[$i] > $maior) {
  $maior = $argv[$i];

}

}
echo "$maior" . PHP_EOL;


?>
