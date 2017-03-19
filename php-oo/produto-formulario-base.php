Nome: 
<input type="text" name="nome" value="<?= $produto->nome ?>"><br><br>
Preço: 
<input type="number" name="preco" value="<?= $produto->preco ?>"><br><br>
Descrição:
<textarea name="descricao"><?= $produto->descricao ?></textarea><br><br>
<?php
  $usado = $produto->usado ? "checked='checked'" : "";
?>
<input type="checkbox" name="usado" <?= $usado ?> value="true"> Usado
<br><br>
Categoria:
<select name="categoria_id">
<?php 
  foreach($categorias as $categoria) : 
    $essaEhACategoria = $produto->categoria->id == $categoria->id;
    $selecao = $essaEhACategoria ? "selected='selected'" : "";
?>
  <option value="<?= $categoria->id ?>" <?=$selecao?>>
    <?= $categoria->nome ?>
  </option>
<?php endforeach ?>
</select>