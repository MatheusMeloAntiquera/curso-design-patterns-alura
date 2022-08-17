<?php

namespace Alura\DesignPattern;

use DateTimeImmutable;

class GerarPedidoHandler
{
    public function __construct(/** PedidoRepository, Mailservice */){

    }

    public function execute(GerarPedido $gerarPedido){
        $orcamento = new Orcamento();
        $orcamento->valor = $gerarPedido->getValorOrcamento();
        $orcamento->qtdItens = $gerarPedido->getNumeroDeItens();

        $pedido = new Pedido();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->dataFinalizacao = new DateTimeImmutable();
        $pedido->orcamento = $orcamento;

        /** PedidoRepository */
        echo "Criar pedido no banco de dados" . PHP_EOL;

        /** Mailservice */
        echo "Enviar e-mail para o cliente" . PHP_EOL;

        print_r($pedido);
    }
}
