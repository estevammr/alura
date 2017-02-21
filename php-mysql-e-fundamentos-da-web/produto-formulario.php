<?php include("cabecalho.php"); 
  include ("conecta.php");
  include ("banco-categoria.php");
  include("logica-usuario.php");

verificaUsuario();]

$produto = array("nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1");
$usado = "";

$categorias = listaCategorias($conexao);
?>
  <h1>Formulário de cadastro</h1>
  <form action="adiciona-produto.php" method="post">
    
    <?php include "produto-formulario-base.php"; ?>
    
    <button class="btn btn-primary" type="submit">Cadastrar</button>
  </form>
<?php include("rodape.php"); ?>