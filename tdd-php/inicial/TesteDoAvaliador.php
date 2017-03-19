<?php
require "Usuario.php";
require "Lance.php";
require "Leilao.php";

class TesteDoAvaliador {

  public function testa() {

    $joao = new Usuario("Joao");
    $renan = new Usuario("Renan");
    $felipe = new Usuario("Felipe");

    $leilao = new Leilao("Playstation 3");

    $leilao->propoe(new Lance($joao,250));
    $leilao->propoe(new Lance($renan,300));
    $leilao->propoe(new Lance($felipe,400));

    $leiloeiro = new Avaliador();
    $leiloeiro->avalia($leilao);

    $maiorEsperado = 400;
    $menorEsperado = 250;

    var_dump($leiloeiro->getMaior() == $maiorEsperado); // imprime 400
    var_dump($leiloeiro->getMenor() == $menorEsperado); // imprime 250

  }
}