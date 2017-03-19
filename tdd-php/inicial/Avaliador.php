<?php  

class Avaliador
{
  
  public $maior = -INF;
  public $menor = INF;

  public function avalia(Leilao $leilao)
  {
    foreach ($leilao->getLances() as $lance) {
      if($lance->getValor() > $this->maior) {
        $this->maior = $lance->getValor();
      }
      if($lance->getValor() < $this->menor) {
        $this->menor = $lance->getValor();
      }
    }
  }

  public function getMaior()
  {
    return $this->maior;
  }

  public function getMenor()
  {
    return $this->menor;
  }

}