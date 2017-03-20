Nome: 
<input type="text" name="nome" value="<?= $produto->getNome() ?>"><br><br>
Preço: 
<input type="number" name="preco" value="<?= $produto->getPreco() ?>"><br><br>
Descrição:
<textarea name="descricao"><?= $produto->getDescricao() ?></textarea><br><br>
<?php
  $usado = $produto->getUsado() ? "checked='checked'" : "";
?>
<input type="checkbox" name="usado" <?= $usado ?> value="true"> Usado
<br><br>
Categoria:
<select name="categoria_id">
<?php 
  foreach($categorias as $categoria) : 
    $essaEhACategoria = $produto->getCategoria()->getId() == $categoria->getId();
    $selecao = $essaEhACategoria ? "selected='selected'" : "";
?>
  <option value="<?= $categoria->getId() ?>" <?=$selecao?>>
    <?= $categoria->getNome() ?>
  </option>
<?php endforeach ?>
</select>