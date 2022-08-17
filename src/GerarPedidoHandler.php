<?php

namespace Alura\DesignPattern;

use DateTimeImmutable;
use Alura\DesignPattern\AcoesAoGerarPedido\LogGerarPedido;
use Alura\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;

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

        $pedidosRepository = new CriarPedidoNoBanco();
        $logGerarPedido = new LogGerarPedido();
        $enviarPedidoPorEmail = new EnviarPedidoPorEmail();
        
        $pedidosRepository->executaAcao($pedido);
        $logGerarPedido->executaAcao($pedido);
        $enviarPedidoPorEmail->executaAcao($pedido);

        print_r($pedido);
    }
}
