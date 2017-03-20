<?php 
  require_once("cabecalho.php");
  require_once("banco-produto.php");
  require_once("mostra-alerta.php");?>

<h1>Listagem de Produto</h1>
<?php mostraAlerta("success"); ?>

<table class="table">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Preço</th>
      <th>Preço com desconto</th>
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
      <td><?= $produto->getNome() ?></td>
      <td><?= $produto->getPreco() ?></td>
      <td><?= $produto->precoComDesconto(0.2) ?></td>
      <td><?= substr($produto->getDescricao(), 0, 40) ?></td>
      <td><?= $produto->getCategoria()->getNome() ?></td>
      <td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?= $produto->getId() ?>">Alterar</a></td>
      <td>
      <form action="remove-produto.php" method="post">
        <input type="hidden" name="id" value="<?= $produto->getId() ?>">
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