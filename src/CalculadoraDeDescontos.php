<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Descontos\SemDesconto;
use Alura\DesignPattern\Descontos\DescontoMaisDe5Itens;
use Alura\DesignPattern\Descontos\DescontoMaisDe500reais;



class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDesconto = new DescontoMaisDe5Itens(
            new DescontoMaisDe500reais(
                new SemDesconto()
            )
        );

        return $cadeiaDesconto->calculaDesconto($orcamento);
    }
}
