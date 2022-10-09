<?php 

    @$codigo=$_REQUEST['code'];
	@$qtd=$_REQUEST['qtd'];
	@$id=$_REQUEST['id'];

	$pdo = new PDO('mysql:host=127.0.0.1;dbname=hardsoft','root',''); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql =$pdo->prepare("DELETE FROM `venda` WHERE codigo = '$codigo' AND id_cliente = '$id'");
	$sql->execute();

	$sql =$pdo->prepare("DELETE FROM `vendidos` WHERE codigo = '$codigo' AND id_cliente = '$id'");
	$sql->execute();

	$sql =$pdo->prepare("SELECT * FROM `produtos` WHERE Codigo = '".$codigo."'");
	$sql->execute();
	$linhas=$sql->fetchAll(PDO::FETCH_OBJ);

	$novoitem;
	$novototal;

	foreach ($linhas as $aa) :

		$novoitem=$aa->itotal+$qtd;
		$novototal=$novoitem*$aa->preco;

    endforeach;

	$sql =$pdo->prepare("UPDATE `produtos` SET itotal = '$novoitem' WHERE Codigo = '$codigo'");
	$sql->execute();

	$sql =$pdo->prepare("UPDATE `produtos` SET stock = '$novototal' WHERE Codigo = '$codigo'");
	$sql->execute();
	
	session_start();
	header("Location: ./preview.php?id=".$_SESSION['revendacode']."");


?>