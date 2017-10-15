<?php

class GeradorNotaFiscal {

    private $acoes;

    public function __construct() {
        $this->acoes = [];
    }

    public function addAcao(AcaoAposGerarNota $acao) {
        $this->acoes[] = $acao;
    }

    public function gera(Fatura $fatura) {

        $valor = $fatura->getValorMensal();

        $nf = new NotaFiscal($valor,$this->impostoSobreValor($valor));

        foreach($this->acoes as $acao)  {
            $acao->executa($nf);
        }
        return $this->nf;
    }

    private function impostoSobreValor($valor) {
        return $valor * 0.06;
    }
}

interface AcaoAposGerarNota {
    function executa(NotaFiscal $nf);
}

class NotaFiscalDao implements AcaoAposGerarNota  {
    public function executa(NotaFiscal $nf) {
        echo "Persistindo no db";
    }
}

class EnviadorDeEmail implements AcaoAposGerarNota  {

    public function executa(NotaFiscal $nf)  {
        echo "Envia email";
    }
}
