<?php

require 'database.php';

$con = new Database();
$pdo = $con->conectar();

$campo = $_POST["campo"];

$sql = "SELECT Codigo,preco, nome FROM produtos WHERE nome LIKE ? OR Codigo LIKE ? ORDER BY nome ASC LIMIT 0, 10";
$query = $pdo->prepare($sql);
$query->execute([$campo . '%', $campo . '%']);

$html = "";

while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
	$html .= "<li onclick=\"mostrar('" . $row["Codigo"] . "')\">" . number_format($row["preco"], 2, ',', '.'). "Kz - " . $row["nome"] . "</li>";
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);
