<?php require_once("cabecalho.php"); 
  require_once ("banco-categoria.php");
  require_once("logica-usuario.php");

verificaUsuario();]

$produto = array("nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1");
$usado = "";

$categorias = listaCategorias($conexao);
?>
  <h1>Formulário de cadastro</h1>
  <form action="adiciona-produto.php" method="post">
    
    <?php require_once "produto-formulario-base.php"; ?>
    
    <button class="btn btn-primary" type="submit">Cadastrar</button>
  </form>
<?php require_once("rodape.php"); ?>