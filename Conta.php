<?php

class Conta
{
  public $numero;
  public $saldo = 0;
  public $limite = 100;
  public $Agencia;


  

  function deposita(float $valor)
  {

    $this->saldo += $valor;

  }




  function saca(float $valor)
  {

    $this->saldo -= $valor;

  }


}
