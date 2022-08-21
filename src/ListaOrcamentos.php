<?php

namespace Alura\DesignPattern;

use Traversable;
use ArrayIterator;
use IteratorAggregate;
use Alura\DesignPattern\Orcamento;

class ListaOrcamentos implements IteratorAggregate
{
    /**
     *
     * @var Orcamento[]
     */
    private $orcamentos = [];

    public function adicionaOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    public function retornaListaOrcamentos()
    {
        return $this->orcamentos;
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->orcamentos);
    }
}
