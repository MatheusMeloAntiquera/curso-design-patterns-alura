<?php

namespace Alura\DesignPattern;

use DateTimeImmutable;
use Alura\DesignPattern\AcoesAoGerarPedido\LogGerarPedido;
use Alura\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPattern\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Alura\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;

class GerarPedidoHandler
{
    /**
     * Undocumented variable
     *
     * @var AcaoAposGerarPedido[]
     */
    private array $acoesAposGerarPedido = [];

    public function __construct(/** PedidoRepository, Mailservice */){

    }

    public function adicionarAcaoAoGerarPedido(AcaoAposGerarPedido $acao){
        $this->acoesAposGerarPedido[] = $acao;
    }

    public function execute(GerarPedido $gerarPedido){
        $orcamento = new Orcamento();
        $orcamento->valor = $gerarPedido->getValorOrcamento();
        $orcamento->qtdItens = $gerarPedido->getNumeroDeItens();

        $pedido = new Pedido();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->dataFinalizacao = new DateTimeImmutable();
        $pedido->orcamento = $orcamento;

        foreach($this->acoesAposGerarPedido as $acao){
            $acao->executaAcao($pedido);
        }

        // print_r($pedido);
    }
}
