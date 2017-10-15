<?php

class CalculadoraDeSalario 
{
    public function calcula(Funcionario $funcionario) {

        return $funcionario->calculaSalario();

    }
}

interface RegraDeCalculo
{
    public function calcula(Funcionario $funcionario);
} 

class DezOuVintePorcento implements RegraDeCalculo 
{
    public function calcula(Funcionario $funcionario) {

        if ($funcionario->getSalario() > 3000) {
            return $funcionario->getSalario() * 0.8;
        }

        return $funcionario->getSalario() * 0.9;
    }
}

class QuinzeOuVinteCincoPorcento implements RegraDeCalculo
{
    public function calcula(Funcionario $funcionario) {

        if ($funcionario->getSalario() > 2000) {
            return $funcionario->getSalario() * 0.75;
        }

        return $funcionario->getSalario() * 0.85;

    }
}


class Cargo 
{
    private $regra;

    function __construct(RegraDeCalculo $regra) {
        $this->regra = $regra;
    }

    public function getRegra() {
        return $this->regra;
    }
}

class Desenvolvedor extends Cargo {

}
class Tester extends Cargo {

}
class Dba extends Cargo {

}

class Funcionario {

    private $id;
    private $nome;
    private $cargo;
    private $dataAdmisao;
    private $salario;

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function getDataAdmisao() {
        return $this->dataAdmisao;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($novoNome) {
        $this->nome = $novoNome;
    }

    public function setCargo(Cargo $cargo) {
        $this->cargo = $cargo;
    }
    public function setDataAdmisao(DateTime $data) {
        $this->dataAdmisao = $data;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }
    public function calculaSalario()  {
        return  $this->cargo->getRegra()->calcula($this);
    }
}