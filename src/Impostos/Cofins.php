<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Impostos\Imposto;

class Cofins extends ImpostoCom2Aliquotas
{
    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 300 && $orcamento->qtdItens > 3;
    }

    protected function aplicaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.04;
    }

    protected function aplicaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.025;
    }
}
