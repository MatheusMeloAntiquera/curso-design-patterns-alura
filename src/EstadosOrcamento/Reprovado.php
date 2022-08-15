<?php

namespace Alura\DesignPattern\EstadosOrcamento;

use DomainException;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\EstadosOrcamento\Finalizado;

class Reprovado extends EstadoOrcamento
{
    
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        //Quebra de contrato (Principio de Liskov), deveria retornar um float, mas lançou uma exception
        throw new DomainException(message: "Orçamentos reprovados não podem receber desconto");
    }

    public function finaliza(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}
