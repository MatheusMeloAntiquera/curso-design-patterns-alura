<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Impostos\Imposto;

/**
 * Isso é um template
 */
abstract class ImpostoCom2Aliquotas implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        if ($this->deveAplicarTaxaMaxima($orcamento)) {
            return $this->aplicaTaxaMaxima($orcamento);
        }

        return $this->aplicaTaxaMinima($orcamento);
    }

    abstract protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool;
    abstract protected function aplicaTaxaMaxima(Orcamento $orcamento): float;
    abstract protected function aplicaTaxaMinima(Orcamento $orcamento): float;
}
