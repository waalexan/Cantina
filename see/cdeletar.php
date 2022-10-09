<?php 

    @$id=$_REQUEST['id'];
	@$nome=$_REQUEST['produto'];
	@$data=$_REQUEST['data'];
	@$total=$_REQUEST['total'];

	$pdo = new PDO('mysql:host=127.0.0.1;dbname=hardsoft','root',''); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql =$pdo->prepare("DELETE FROM `compras` WHERE id_relatorio = '$id' AND Produto = '$nome' AND `Data` = '$data' AND Total = '$total'");
	$sql->execute();

	header("Location: ../compras.php");


?>