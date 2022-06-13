<?php

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Impostos\Iss;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\CalculadoraDeDescontos;

require "./vendor/autoload.php";


// $calculadoraDeImpostos = new CalculadoraDeImpostos();
// $orcamento = new Orcamento();
// $orcamento->valor = 100;

// echo $calculadoraDeImpostos->calcular($orcamento, new Iss());


$orcamento = new Orcamento();
$orcamento->valor = 100;
$orcamento->qtdItens = 5;

$calculadoraDeDescontos = new CalculadoraDeDescontos();
echo $calculadoraDeDescontos->calculaDescontos($orcamento);
