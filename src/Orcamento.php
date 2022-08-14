<?php

namespace Alura\DesignPattern;

class Orcamento
{
    public int $qtdItens;
    public float $valor;
    private $estadoAtual;

    public function calculaDescontoExtra(): float
    {
        if ($this->estadoAtual == "EM_APROVACAO") {
            return $this->valor * 0.05;
        }

        if ($this->estadoAtual == "APROVADO") {
            return $this->valor * 0.02;
        }

        throw new \DomainException(
            "Orçamentos reprovados e finalizados não podem receber descontos"
        );
    }
}
