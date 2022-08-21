<?php

use Alura\DesignPattern\Orcamento;

require_once "vendor/autoload.php";

$listaOrcamentos = [];

$orcamento1 = new Orcamento();
$orcamento1->qtdItens = 10;
$orcamento1->aprova();
$orcamento1->valor = 1000;

$orcamento2 = new Orcamento();
$orcamento2->qtdItens = 20;
$orcamento2->reprova();
$orcamento2->valor = 2000;

$orcamento3 = new Orcamento();
$orcamento3->qtdItens = 30;
$orcamento3->aprova();
$orcamento3->finaliza();
$orcamento3->valor = 3000;

$listaOrcamentos = [
    $orcamento1,
    $orcamento2,
    $orcamento3,
    'Eu sou muito valição quebrei o código'
];

foreach ($listaOrcamentos as $orcamento){
    echo "Valor: {$orcamento->valor}" . PHP_EOL;
    echo "Estado: " . get_class($orcamento->estadoAtual) . PHP_EOL;
    echo "Qtd Itens: {$orcamento->qtdItens}" . PHP_EOL;
    echo PHP_EOL;
}
