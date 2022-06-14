<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Impostos\ImpostoCom2Aliquotas;

class IE extends ImpostoCom2Aliquotas
{
    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 500;
    }

    protected function aplicaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.03;
    }

    protected function aplicaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }
}
