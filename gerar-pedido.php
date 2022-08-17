<?php

require_once "vendor/autoload.php";

use Alura\DesignPattern\Pedido;
use Alura\DesignPattern\Orcamento;

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$orcamento = new Orcamento();
$orcamento->valor = $valorOrcamento;
$orcamento->qtdItens = $numeroDeItens;

$pedido = new Pedido();
$pedido->nomeCliente = $nomeCliente;
$pedido->dataFinalizacao = new DateTimeImmutable();
$pedido->orcamento = $orcamento;

echo "Criar pedido no banco de dados" . PHP_EOL;

echo "Enviar e-mail para o cliente" . PHP_EOL;

print_r($pedido);