<?php

$pdo = new PDO('mysql:host=127.0.0.1;dbname=hardsoft', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = $pdo->prepare("SELECT * FROM `produtos` WHERE Codigo = '".$_REQUEST['code']."'");
$sql->execute();
$linhas = $sql->fetchAll(PDO::FETCH_OBJ);

$id;

foreach ($linhas as $aa) :
    $code = $aa->Codigo;
    $nome = $aa->nome;
    $categoria = $aa->categoria;
    $preco = $aa->preco;
    session_start();
    header("Location: ../cc/preview.php?id=".$_SESSION['revendacode']."&code=$code&nome=$nome&categoria=$categoria&preco=$preco");
endforeach;
