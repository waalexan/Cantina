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
    $sql = "UPDATE `carrinho` SET `total`='".$_POST['total']."',`pagamento`='".$_POST['pago']."',`troco`='".$_POST['troco']."',`TDP`='".$_POST['tdp']."',`descricao`='".$_POST['responsavel']."' WHERE id ='".$_SESSION['revendacode']."';"; 
    if($conn->query($sql))
	{    
        $sql = "UPDATE `Tcarrinho` SET `total`='".$_POST['total']."',`pagamento`='".$_POST['pago']."',`troco`='".$_POST['troco']."',`TDP`='".$_POST['tdp']."',`descricao`='".$_POST['responsavel']."' WHERE id_relatorio ='".$_SESSION['revendacode']."';"; 
        $conn->query($sql);
        $_SESSION['revendacode']="";
        header("Location: ./");
	}
}
