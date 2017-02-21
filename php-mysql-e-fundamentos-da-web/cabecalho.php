<?php 
error_reporting(E_ALL ^ E_NOTICE);
require_once("mostra-alerta.php"); ?>

<html>
<head>
    <title>Minha loja</title>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/loja.css" rel="stylesheet" />
</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand">Minha Loja</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="produto-formulario.php">Adiciona Produto</a></li>
                    <li><a href="produto-lista.php">Produtos</a></li>
                </ul>
            </div>
        </div> 
    </div>
    <div class="container">
        <div class="principal">
    <!-- fim cabecalho.php -->
    <?php
        mostraAlerta["success"];
        mostraAlerta["danger"];
    ?>