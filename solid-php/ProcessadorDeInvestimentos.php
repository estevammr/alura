<?php

class ProcessadorDeInvestimentos 
{
    public function processa() 
    {
        $contas = $this->contasDoBanco();

        foreach($contas as $conta) {
            $conta->rende();
        }
    }

    private function contasDoBanco() 
    {
        $contas = array();
        $contas[] = $this->contaComumCom(100);
        $contas[] = $this->contaEstudanteCom(200);
        $contas[] = $this->contaComumCom(300);

        return $contas;
    }

    private function contaComumCom($valor) 
    {
        $conta = new ContaComum();
        $conta->deposita($valor);

        return $conta;
    }

    private function contaEstudanteCom($valor) 
    {
        $conta = new ContaEstudante();
        $conta->deposita($valor);

        return $conta;
    }
}

class ContaEstudante extends ContaComum 
{
    private $milhas;
    private $m;

    public function __construct()  { 
        $this->m = new ManipuladorDeSaldo();
    }

    public function deposita($valor) 
    {
        $this->m->deposita($valor);
        $this->milhas += (int) $valor;
    }

    public function getMilhas() 
    {
        return $this->milhas;
    }

    public function rende() 
    {
        $this->m->rende(0.0);
    }
}

class ContaComum 
{
    protected $saldo;
    private $manipulador;
    
    public function __construct()  {
        $this->manipulador = new ManipuladorDeSaldo();
    }

    public function saca($valor) 
    {
        $this->manipulador->saca($valor);
    }

    public function deposita($valor) 
    {
        $this->manipulador->deposita($valor);
    }

    public function getSaldo() 
    {
        return $this->manipulador->getSaldo();
    }

    public function rende() 
    {
        $this->manipulador->rende(1.1);
    }
}

class ManipuladorDeSaldos {

    private $saldo;

    public function saca($valor) {

        if($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
        }else {
            throw new Exception("Valor inválido para o saque");
        }
    }

    public function deposita($valor) {
        $this->saldo += $valor;
    }

    public function getValor() {
        return $this->valor;
    }

    public function rende($taxa)  { 
        $this->saldo *= $taxa;
    }
}