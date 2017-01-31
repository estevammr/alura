<?php include("cabecalho.php");
  include("conecta.php");
  include("banco-produto.php");

$nome  = $_GET["nome"];
$preco = $_GET["preco"];
$conexao = mysqli_connect('localhost', 'root', '1234', 'loja');

if (insereProduto($conexao, $nome, $preco)) { ?>
  <p class="text-success">O produto  <?= $nome ?>, <?= $preco ?> adicionado com sucesso!</p>
<?php } else { ?>
  <p class="text-danger">O produto  <?= $nome ?> não foi adicionado!</p>
<?php

}

?>
<?php include("rodape.php"); ?>