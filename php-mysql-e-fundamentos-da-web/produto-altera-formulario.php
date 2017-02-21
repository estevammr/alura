<?php include("cabecalho.php"); 
  include ("conecta.php");
  include ("banco-categoria.php");
  include ("banco-produto.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);

$categorias = listaCategorias($conexao);
?>
  <h1>Formulário de alteração</h1>
  <form action="altera-produto.php" method="post">
    <input type="hidden" name="id" value="<?=$produto['id']?>" />
    
    <?php include "produto-formulario-base.php"; ?>
    
    <button class="btn btn-primary" type="submit">Alterar</button>
  </form>
<?php include("rodape.php"); ?>