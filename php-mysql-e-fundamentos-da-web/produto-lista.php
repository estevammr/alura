<?php include("cabecalho.php");
  include("conecta.php");
  include("banco-produto.php");?>

<table class="table">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Preço</th>
    </tr>
  </thead>
  <?php
    $produtos = listaProdutos($conexao);

    foreach ($produtos as $produto) :
  ?>
  <tbody>
    <tr>
      <td><?= $produto['nome']; ?></td>
      <td><?= $produto['preco']; ?></td>
    </tr>
  </tbody>
  <?php
    endforeach
  ?>
</table>


<?php include("rodape.php"); ?>