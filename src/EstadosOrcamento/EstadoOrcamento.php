<?php

namespace Alura\DesignPattern\EstadosOrcamento;

use DomainException;
use Alura\DesignPattern\Orcamento;

abstract class EstadoOrcamento
{
    /**
     *
     * @throws DomainException
     * @return float
     */
    abstract public function calculaDescontoExtra(Orcamento $orcamento): float;

    public function aprova(Orcamento $orcamento)
    {
        throw new DomainException("Esse orçamento não pode ser aprovado");
    }

    public function reprova(Orcamento $orcamento)
    {
        throw new DomainException("Esse orçamento não pode ser reprovado");
    }

    public function finaliza(Orcamento $orcamento)
    {
        throw new DomainException("Esse orçamento não pode ser finalizado");
    }
}
