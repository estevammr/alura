<?php include("cabecalho.php"); 
  include ("conecta.php");
  include ("banco-categoria.php");

$categorias = listaCategorias($conexao);
?>
  <h1>Formulário de cadastro</h1>
  <form action="adiciona-produto.php" method="post">
    Nome: 
    <input type="text" name="nome"><br><br>
    Preço: 
    <input type="number" name="preco"><br><br>
    Descrição:
    <textarea name="descricao"></textarea><br><br>
    Categoria:
    <?php foreach($categorias as $categoria): ?>
      <input type="radio" name="categoria_id" value="<?=$categoria['id']?>">
      <?=$categoria['nome']?>
    <?php endforeach ?>
    
    <input class="btn btn-primary" type="submit" value="Cadastrar">
  </form>
<?php include("rodape.php"); ?>