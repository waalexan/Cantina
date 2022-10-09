<?php
$host = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$host;dbname=hardsoft", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_GET["tipo"] == "Caixa") {
    $novo = $_GET['itemp'] * $_GET['numero'];
    $total = $novo + $_GET['itemt'];

    $sql = "UPDATE produtos SET itotal='$total' WHERE Codigo = '" . $_GET['code'] . "'";

    if ($conn->query($sql)) {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=hardsoft', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $pdo->prepare("SELECT * FROM `dados_da_abertura`");
        $sql->execute();
        $linhas = $sql->fetchAll(PDO::FETCH_OBJ);
        $codeR;
        foreach ($linhas as $aa) :
            $codeR=$aa->id;
        endforeach;

        $TOTAL = $_GET['preco'] * $_GET['numero'];
        if ($aa->id == "") {
            $sql = $pdo->prepare("INSERT INTO `compras` VALUES ('feichado','" . date("d/m/Y") . "','" . $_GET['nome'] . "','" . $_GET['preco'] . "','" . $_GET['numero'] . " Cax','$TOTAL')");
            $sql->execute();
        } else {
            $sql = $pdo->prepare("INSERT INTO `compras` VALUES ('" . $codeR. "','" . date("d/m/Y") . "','" . $_GET['nome'] . "','" . $_GET['preco'] . "','" . $_GET['numero'] . " Cax','$TOTAL')");
            $sql->execute();
        }
        header("Location: ../add.php?code=" . $_GET['code'] . "&info=ok");
    } else {
        header("Location: ../add.php?code=" . $_GET['code'] . "&info=error");
    }
} else {

    $total = $_GET['numero'] + $_GET['itemt'];

    $sql = "UPDATE produtos SET itotal='$total' WHERE Codigo = '" . $_GET['code'] . "'";

    if ($conn->query($sql)) {
        header("Location: ../add.php?code=" . $_GET['code'] . "&info=ok");
    } else {
        header("Location: ../add.php?code=" . $_GET['code'] . "&info=error");
    }
}
