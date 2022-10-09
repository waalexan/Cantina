<?php
$host = "localhost";
$username = "root";
$password = "";
$id;
date_default_timezone_set('Africa/Luanda');
try 
{
    $conn = new PDO("mysql:host=$host;dbname=hardsoft", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

$response = array('success' => false);

if(true)
{

    $pdo = new PDO('mysql:host=127.0.0.1;dbname=hardsoft','root',''); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql =$pdo->prepare("SELECT * FROM `dados_da_abertura`");
	$sql->execute();
	$linhas=$sql->fetchAll(PDO::FETCH_OBJ);

    $id;

	foreach ($linhas as $aa) :
        $id=$aa->id;
    endforeach;

    $datetime = new DateTime();
    $date=$datetime->format('d/m/Y g:i:s A'); 

    session_start();

    $total=$_POST['qtd']*$_POST['preco'];
      
	$sql = "INSERT INTO `vendidos` VALUES ('".$date."','".$_POST['barcode']."','".$_POST['produto']."','".$_POST['categoria']."','".$_POST['preco']."','".$_POST['qtd']."','".$total."','".$id."','".$_SESSION['revendacode']."')";
    $conn->query($sql);

	$sql = "INSERT INTO `venda` VALUES ('".$date."','".$_POST['barcode']."','".$_POST['produto']."','".$_POST['categoria']."','".$_POST['preco']."','".$_POST['qtd']."','".$total."','".$_SESSION['revendacode']."')";

	if($conn->query($sql))
	{
        $sql =$conn->prepare("SELECT * FROM `produtos` WHERE Codigo = '".$_POST['barcode']."'");
        $sql->execute();
        $linhas=$sql->fetchAll(PDO::FETCH_OBJ);

        $novoitem;
        $novototal;

        foreach ($linhas as $aa) :

            $novoitem=$aa->itotal-$_POST['qtd'];
            $novototal=$novoitem*$aa->preco;

        endforeach;

        $sql =$conn->prepare("UPDATE `produtos` SET itotal = '$novoitem' WHERE Codigo = '".$_POST['barcode']."'");
        $sql->execute();

        $sql =$conn->prepare("UPDATE `produtos` SET stock = '$novototal' WHERE Codigo = '".$_POST['barcode']."'");
        $sql->execute();
        header("Location: ./preview.php?id=".$_SESSION['revendacode']."");
	}
}
