<?php require_once("cabecalho.php");
  require_once("banco-produto.php");
  require_once("mostra-alerta.php");?>

<h1>Listagem de Produto</h1>
<?php mostraAlerta("success"); ?>

<table class="table">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Preço</th>
      <th>Descrição</th>
      <th>Categoria</th>
    </tr>
  </thead>
  <?php
    $produtos = listaProdutos($conexao);

    foreach ($produtos as $produto) :
  ?>
  <tbody>
    <tr>
      <td><?=$produto['nome']?></td>
      <td><?=$produto['preco']?></td>
      <td><?=substr($produto['descricao'], 0, 40)?></td>
      <td><?=$produto['categoria_nome']?></td>
      <td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto['id']?>">Alterar</a></td>
      <td>
      <form action="remove-produto.php" method="post">
        <input type="hidden" name="id" value="<?=$produto['id']?>">
        <button class="btn btn-danger">Remover</button>
      </form>
      </td>
    </tr>
  </tbody>
  <?php
    endforeach
  ?>
</table>


<?php require_once("rodape.php"); ?>