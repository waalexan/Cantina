<?php 
   
	$pdo = new PDO('mysql:host=127.0.0.1;dbname=hardsoft','root',''); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql =$pdo->prepare("DELETE FROM venda");
    $sql->execute(); 

    // $sql =$pdo->prepare("DELETE FROM abaertura");
    // $sql->execute(); 

    $sql =$pdo->prepare("SELECT * FROM dados_da_abertura");
	$sql->execute();
	$linhas=$sql->fetchAll(PDO::FETCH_OBJ);
    $id;
	foreach ($linhas as $aa) :
        $id=$aa->id;
    endforeach;
    $Sql =$pdo->prepare("INSERT INTO relatorios VALUES ('".$id."','".$_POST['data']."','".$_POST['responsavel']."','".$_POST['total']."')");
    $Sql->execute();

    $sql =$pdo->prepare("DELETE FROM dados_da_abertura");
    $sql->execute();     
    $sql =$pdo->prepare("DELETE FROM carrinho");
    $sql->execute();  
    // Deleting a cookie
    setcookie("clientecode", "", time()-3600);   
    header("Location: ../relatorio.php");

 ?>
 