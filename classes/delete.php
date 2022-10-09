<?php 
session_start();
@$codigo=$_REQUEST['code'];

$pdo = new PDO('mysql:host=127.0.0.1;dbname=hardsoft','root',''); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql =$pdo->prepare("DELETE FROM `produtos` WHERE Codigo = '".$codigo."'");
	$sql->execute();

    header("Location: ../cadastro.php");