<?php include("cabecalho.php"); ?>
  <h1>Formulário de cadastro</h1>
  <form action="adiciona-produto.php" method="post">
    Nome: 
    <input type="text" name="nome"><br><br>
    Preço: 
    <input type="number" name="preco"><br><br>
    Descrição:
    <textarea name="descricao"></textarea><br><br>
    Categoria:
    <input type="radio" name="categoria" value="1">Esporte
    <input type="radio" name="categoria" value="1">Escolar
    <input type="radio" name="categoria" value="1">Mobilidade<br><br>
    <input class="btn btn-primary" type="submit" value="Cadastrar">
  </form>
<?php include("rodape.php"); ?>