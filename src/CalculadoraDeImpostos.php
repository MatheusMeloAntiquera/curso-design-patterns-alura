<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Impostos\Imposto;

class CalculadoraDeImpostos
{
    public function calcular(Orcamento $orcamento, Imposto $imposto)
    {
        return $imposto->calculaImposto($orcamento);
    }
}
