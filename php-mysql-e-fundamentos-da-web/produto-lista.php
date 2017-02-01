<?php include("cabecalho.php");
  include("conecta.php");
  include("banco-produto.php");?>
<h1>Listagem de Produto</h1>
<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
  <p class="alert-success">Produto apagado com sucesso.</p>
<?php } ?>

<table class="table">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Preço</th>
      <th>Descrição</th>
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


<?php include("rodape.php"); ?>