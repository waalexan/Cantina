<?php 
    
    $id=random_int(100000,800000);
    $date = date("Y/m/d");

	$pdo = new PDO('mysql:host=127.0.0.1;dbname=hardsoft','root',''); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql =$pdo->prepare("SELECT * FROM `produtos`");
	$sql->execute();
	$linhas=$sql->fetchAll(PDO::FETCH_OBJ);
    
	foreach ($linhas as $aa) :

        $sql =$pdo->prepare("INSERT INTO `abaertura` VALUES ('".$id."','".$date."','".$aa->nome."','".$aa->categoria."','".$aa->preco."','".$aa->caixas."','".$aa->item."','".$aa->itotal."','Automatico')");
        $sql->execute(); 

	endforeach;

    $sql =$pdo->prepare("DELETE FROM dados_da_abertura");
    $sql->execute(); 

    $Sql =$pdo->prepare("INSERT INTO `dados_da_abertura` VALUES ('".$id."','".$date."','Automatico')");
    $Sql->execute();

    header("Location: ../cc");
 ?>
 