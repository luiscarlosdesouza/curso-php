<?php

class Funcionario {


  public $nome;
  public $salario;
  public $aumentoSalario;





  public function aumentaSalario($valor)
  {
    $this->aumentoSalario += $valor;

    $this->salario += $valor;


  }



}



 ?>
