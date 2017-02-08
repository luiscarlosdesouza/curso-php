<?php

class Conta{

  public $numero;
  public $saldo;
  public $conta;
  public $limite;
  public $agencia;


  public function deposita($valor)
  {
    $this->saldo += $valor;

  }

  public function saca($valor)
  {

    if($valor <= $this->saldo){
      $this->saldo -= $valor;
      return TRUE;
    }
    else {
      {
        return FALSE;
      }
    }

    $this->saldo -= $valor;

  }


}

 ?>
