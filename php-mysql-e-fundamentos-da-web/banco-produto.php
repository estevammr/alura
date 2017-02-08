<?php

function listaProdutos($conexao) {
  $produtos = array();
  $resultado = mysqli_query($conexao, "select p.*, c.nome as categoria_nome from produtos as p join categorias as c on c.id = p.categoria_id");
  while($produto = mysqli_fetch_assoc($resultado)) {
    array_push($produtos, $produto);
  }
  return $produtos;
}

function insereProduto ($conexao, $nome, $preco, $descricao, $categoria_id) {
  $query = "insert into produtos (nome, preco, descricao, categoria_id) values ('{$nome}', '{$preco}', '{$descricao}', '{$categoria_id}')";
  $resultadoInsere = mysqli_query($conexao, $query);
  return $resultadoInsere;
}

function removeProduto($conexao, $id) {
  $query = "delete from produtos where id = {$id}";
  $resultadoRemove = mysqli_query($conexao, $query);
  return $resultadoRemove;
}