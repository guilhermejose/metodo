<?php
declare(strict_types = 1);
require 'Conta.php';

$conta = new Conta();
$conta->Agencia=123;
$conta->numero=001;

echo "\n";
echo "Agencia: $conta->Agencia" . PHP_EOL;
echo "Conta: $conta->numero" . PHP_EOL;
$conta->deposita(2000);

echo "Saldo disponível: {$conta->saldo+::$conta->limite}" . PHP_EOL;
echo "\n";
