<?php

class CalculadoraDePrecos {

    private $tabela;
    private $entrega;
    
    public function __construct(TabelaDePreco $tabela, ServicoDeEntrega $entrega) {
        $this->tabela = $tabela;
        $this->entrega = $entrega;
    }

    public function calcula(Compra $produto) {
    
        $desconto = $this->tabela->descontoPara($produto->getValor());
        $frete = $this->entrega->para($produto->getCidade());

        return $produto->getValor() * (1-$desconto) + $frete;
    }

}

class TabelaDePrecoPadrao implements TabelaDePreco {

    public function descontoPara($valor) {
        if($valor > 5000) return 0.03;
        if($valor > 1000) return 0.05;
        return 0;
    }
}

class Frete implements ServicoDeEntrega {

    public function para($cidade) {

        if(strtoupper($cidade) == "SAO PAULO") {
            return 15;
        }

        return 30;
    }
}

interface TabelaDePreco  {
    function descontoPara($valor);
}

interface ServicoDeEntrega  {
    function para($cidade);
}