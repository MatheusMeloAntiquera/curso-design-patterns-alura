<?php

namespace Alura\DesignPattern\EstadosOrcamento;

use DomainException;
use Alura\DesignPattern\Orcamento;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        //Quebra de contrato (Principio de Liskov), deveria retornar um float, mas lançou uma exception
        throw new DomainException(message: "Orçamentos finalizados não podem receber desconto");
    }
}
