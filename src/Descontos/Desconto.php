<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

abstract class Desconto
{
    protected ?Desconto $proximoDesconto;
    public function __construct(?Desconto $desconto)
    {
        $this->proximoDesconto = $desconto;
    }

    abstract public function calculaDesconto(Orcamento $orcamento): float;
}
