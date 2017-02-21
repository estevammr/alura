<?php require_once("cabecalho.php"); 
  require_once ("banco-categoria.php");
  require_once ("banco-produto.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);

$categorias = listaCategorias($conexao);
?>
  <h1>Formulário de alteração</h1>
  <form action="altera-produto.php" method="post">
    <input type="hidden" name="id" value="<?=$produto['id']?>" />
    
    <?php require_once "produto-formulario-base.php"; ?>
    
    <button class="btn btn-primary" type="submit">Alterar</button>
  </form>
<?php require_once("rodape.php"); ?>