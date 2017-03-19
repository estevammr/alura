<?php 
require_once("cabecalho.php"); 
require_once ("banco-categoria.php");
require_once("logica-usuario.php");
require_once("class/Produto.php");

verificaUsuario();

$categoria = new Categoria();
$categoria->id = 1;

$produto = new Produto();
$produto->categoria = $categoria;

$usado = "";

$categorias = listaCategorias($conexao);
?>
  <h1>Formulário de cadastro</h1>
  <form action="adiciona-produto.php" method="post">
    
    <?php require_once "produto-formulario-base.php"; ?>
    
    <button class="btn btn-primary" type="submit">Cadastrar</button>
  </form>
<?php require_once("rodape.php"); ?>