<?php include("cabecalho.php");
  include("conecta.php");
  include("banco-produto.php");

$nome  = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria = $_POST["categoria_id"];

$conexao = mysqli_connect('localhost', 'root', '1234', 'loja');

if (insereProduto($conexao, $nome, $preco, $descricao, $categoria)) { ?>
  <p class="text-success">O produto  <?= $nome ?>, <?= $preco ?> adicionado com sucesso!</p>
<?php } else { ?>
  <p class="text-danger">O produto  <?= $nome ?> não foi adicionado!</p>
<?php

}

?>
<?php include("rodape.php"); ?>