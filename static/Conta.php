<?php

class Conta {

  public $numero; //atritubos do objeto
  public $saldo; //atributos do objeto
  public static $contador; //atributo da classe

  public function __construct()
  {
  //  $this->contador++;  this acessa objeto da classe
    self::$contador++; // Self acessa atributo estatico da classe...

  }

  //Metodo da classe

  public static function zeraContador()
    {
    //Evnia email
      echo "zeroContador sendo chamado" . PHP_EOL;

      self::$contador = 0;

    }

}



 ?>
