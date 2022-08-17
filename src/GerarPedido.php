<?php

namespace Alura\DesignPattern;

use DateTimeImmutable;
use Alura\DesignPattern\Pedido;
use Alura\DesignPattern\Command;
use Alura\DesignPattern\Orcamento;

class GerarPedido
{

    private float $valorOrcamento;
    private int $numeroDeItens;
    private string $nomeCliente;
    public function __construct(
        float $valorOrcamento,
        int $numeroDeItens,
        string $nomeCliente
    ) {
        $this->valorOrcamento = $valorOrcamento;
        $this->numeroDeItens = $numeroDeItens;
        $this->nomeCliente = $nomeCliente;
    }

    public function getValorOrcamento()
    {
        return $this->valorOrcamento;
    }

    public function getNumeroDeItens()
    {
        return $this->numeroDeItens;
    }

    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }
}
