<?php include("cabecalho.php"); 
  include ("conecta.php");
  include ("banco-categoria.php");
  include("logica-usuario.php");

verificaUsuario();
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
    <input type="checkbox" name="usado" value="true"> Usado
    <br><br>
    Categoria:
    <select name="categoria_id">
      <?php foreach($categorias as $categoria): ?>
        <option value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
      <?php endforeach ?>
    </select>
    <button class="btn btn-primary" type="submit">Cadastrar</button>
  </form>
<?php include("rodape.php"); ?>