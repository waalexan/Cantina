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
      
	$sql = "INSERT INTO `carrinho` VALUES ('".$_SESSION['clientecode']."','".$date."','".$_POST['responsavel']."','".$_POST['total']."','".$_POST['pago']."','".$_POST['troco']."','".$_POST['tdp']."')";
    if($conn->query($sql))
	{     
        $sql = "INSERT INTO `Tcarrinho` VALUES ('".$_SESSION['clientecode']."','$id','".$date."','".$_POST['responsavel']."','".$_POST['total']."','".$_POST['pago']."','".$_POST['troco']."','".$_POST['tdp']."')"; 
        $conn->query($sql);
        // Deleting a cookie
        setcookie("clientecode", "", time()-3600);
        $_SESSION['clientecode']="";
        header("Location: ./");
	}
}
