<?php 
require_once("cabecalho.php");
require_once("banco-produto.php");
require_once("logica-usuario.php"); 
require_once("class/Produto.php");
require_once("class/Categoria.php");

verificaUsuario();

$categoria = new Categoria();
$categoria->id = $_POST["categoria_id"];

$produto = new Produto();
$produto->nome  = $_POST["nome"];
$produto->preco = $_POST["preco"];
$produto->descricao = $_POST["descricao"];
$produto->categoria = $categoria;

if(array_key_exists("usado", $_POST)) {
    $produto->usado = "true";
} else {
    $produto->usado = "false";
}

if (insereProduto($conexao, $produto)) { ?>
  <p class="text-success">O produto  <?= $produto->nome ?>, <?= $produto->preco ?> adicionado com sucesso!</p>
<?php } else { ?>
  <p class="text-danger">O produto  <?= $produto->nome ?> não foi adicionado!</p>
<?php

}

?>
<?php require_once("rodape.php"); ?>