<?php

require "Avaliador.php";
require "TesteDoAvaliador.php";

$teste = new TesteDoAvaliador();
$teste->testa();
var_dump($teste);