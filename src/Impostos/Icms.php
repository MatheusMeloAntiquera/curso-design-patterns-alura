<?php

namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Impostos\Imposto;

class Icms implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.1;
    }
}
