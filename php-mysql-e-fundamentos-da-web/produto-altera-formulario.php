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
    Nome: 
    <input type="text" name="nome" value="<?=$produto['nome']?>"><br><br>
    Preço: 
    <input type="number" name="preco" value="<?=$produto['preco']?>"><br><br>
    Descrição:
    <textarea name="descricao"><?=$produto['descricao']?></textarea><br><br>
    <?php
      $usado = $produto['usado'] ? "checked='checked'" : "";
    ?>
    <input type="checkbox" name="usado" <?=$usado?> value="true"> Usado
    <br><br>
    Categoria:
    <select name="categoria_id">
    <?php 
      foreach($categorias as $categoria) : 
        $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
        $selecao = $essaEhACategoria ? "selected='selected'" : "";
    ?>
      <option value="<?=$categoria['id']?>" <?=$selecao?>>
        <?=$categoria['nome']?>
      </option>
    <?php endforeach ?>
    </select>
    <button class="btn btn-primary" type="submit">Alterar</button>
  </form>
<?php include("rodape.php"); ?>