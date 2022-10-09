<?php
$host = "localhost";
$username = "root";
$password = "";

try 
{
    $conn = new PDO("mysql:host=$host;dbname=hardsoft", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}


if(isset($_POST['codigo']))
{
    
    $totali=$_POST['caixas']*$_POST['itens'];
    $totalv=$_POST['preco']*$totali;
    $dataexp="".$_POST['ano']."/".$_POST['mes']."/".$_POST['dia']."";
	$sql = "INSERT INTO `produtos` (`Codigo`, `nome`, `categoria`, `preco`, `caixas`, `item`, `itotal`, `stock`, `compra`, `exp`, `alertI`) VALUES ('".$_POST['codigo']."','".$_POST['nome']."','".$_POST['categoria']."','".$_POST['preco']."','".$_POST['caixas']."','".$_POST['itens']."','".$totali."','".$totalv."','".$_POST['armazem']."','$dataexp','".$_POST['lim']."')";
	
	if($conn->query($sql))
	{
		header("Location: ../cadastro.php");
	}else{
        echo "erro ao cadastrar o produto";
    }
}
