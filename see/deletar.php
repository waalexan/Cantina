<?php 

    @$codigo=$_REQUEST['code'];

	$pdo = new PDO('mysql:host=127.0.0.1;dbname=hardsoft','root',''); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql =$pdo->prepare("DELETE FROM `vendidos` WHERE id_relatorio = '$codigo'");
	$sql->execute();

	$sql =$pdo->prepare("DELETE FROM `abaertura` WHERE id_abertura = '$codigo'");
	$sql->execute();

	$sql =$pdo->prepare("DELETE FROM `compras` WHERE id_relatorio = '$codigo'");
	$sql->execute();

	$sql =$pdo->prepare("DELETE FROM `Tcarrinho` WHERE id_clinete = '$codigo'");
	$sql->execute();

    $sql =$pdo->prepare("DELETE FROM `relatorios` WHERE id = '$codigo'");
	$sql->execute();

	header("Location: ../relatorio.php");


?>