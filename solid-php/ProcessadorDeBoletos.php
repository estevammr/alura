<?php

class ProcessadorDeBoletos {

    public function processa($boletos,Fatura $fatura) {

        foreach($boletos as $boleto) {

            $pagamento = new Pagamento($boleto->getValor(), MeioPagamento::Boleto);

            $fatura->adicionaPagamento($pagamento);

        }

        return $fatura->isPago();

    }

}

class Boleto {
    private $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }

    public function getValor() {
        return $this->valor;
    }
}

class Fatura {

    private $cliente;
    private $valor;
    private $pagamentos;
    private $pago;

    public function __construct($cliente,$valor) {
        $this->cliente = $cliente;
        $this->valor = $valor;
        $this->pago = false;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getPagamentos() {
        return $this->pagamentos;
    }

    public function adicionaPagamento(Pagamento $pagamento)  {
        $this->pagamentos[] = $pagamento;
        if($this->valorTotalDosPagamentos() > $this->valor)  {
            $this->pago = true;
        }
    }

    private function valorTotalDosPagamentos()  {
        $total = 0;    

        foreach($this->pagamentos as $pagamento)  {
            $total += $pagamento->getValor();
        }
        return $total;
    }

    public function isPago() {
        return $this->pago;
    }
}

class MeioPagamento {
        const Boleto = 1;
        const Cartao = 1;
}

class Pagamento {
    private $valor;
    private $forma;

    public function __construct($valor,$forma) {
        $this->valor = $valor;
        $this->forma = $forma;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getForma() {
        return $this->forma;
    }
}