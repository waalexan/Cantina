<?php 
session_start();
@$cc=$_REQUEST['cc'];
@$codigo=$_REQUEST['code'];
@$nome=$_REQUEST['produto'];
@$categoria=$_REQUEST['categoria'];
@$preco=$_REQUEST['preco'];
@$caixa=$_REQUEST['caixa'];
@$item=$_REQUEST['iten'];
@$custo=$_REQUEST['armazem'];

$itotal = $caixa * $item;
$vtotal = $itotal * $preco;

$pdo = new PDO('mysql:host=127.0.0.1;dbname=hardsoft','root',''); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql =$pdo->prepare("UPDATE `produtos` SET `Codigo`='".$codigo."',`nome`='".$nome."',`categoria`='".$categoria."',`preco`='".$preco."',`caixas`='".$caixa."',`item`='".$item."',`itotal`='".$itotal."',`stock`='".$vtotal."',`compra`='".$custo."' WHERE Codigo = '".$cc."'");
	$sql->execute();

    header("Location: ../cadastro.php");