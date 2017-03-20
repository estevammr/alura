<?php

    require "class/Produto.php";

    $produto = new Produto();
    $produto->setPreco(59.9);
    $produto->setNome("Livro da Casa do Codigo");

    $outroProduto = $produto;
    $outroProduto->setPreco(100.6);
    $outroProduto->setNome("Livro da Casa do Codigo");

    if ($produto === $outroProduto) {
        echo "sao iguais";
    } else {
        echo "sao diferentes";
    }
