<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Impostos\Imposto;
use Alura\DesignPattern\Orcamento;

class Iss implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}
