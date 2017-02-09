<?php




echo "Array Digitado:" . PHP_EOL;
for($i = 1; $i < count($argv); $i++)
{




  echo "$argv[$i]" . PHP_EOL;



}

  sort($argv);
  echo "Array Ordenado:" . PHP_EOL;
  for($i = 1; $i < count($argv); $i++)
  {




    echo "$argv[$i]" . PHP_EOL;



  }

 ?>
