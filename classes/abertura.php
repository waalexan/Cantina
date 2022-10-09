<?php
session_start();

$pdo = new PDO('mysql:host=127.0.0.1;dbname=hardsoft','root',''); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql =$pdo->prepare("SELECT * FROM `dados_da_abertura`");
	$sql->execute();
	$linhas=$sql->fetchAll(PDO::FETCH_OBJ);

    $id;

	foreach ($linhas as $aa) :
        $id=$aa->id;
    endforeach;

if ($id=="") {
    header("Location: ./live.php?info=offline");

} else {
    $_SESSION['id']=$id;
    header("Location: ./live.php?info=online");
}
