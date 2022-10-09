<?php
$total;
@$code = $_REQUEST['code'];

require 'cc/config.php';
$rows = mysqli_query($conn, "SELECT * FROM produtos WHERE Codigo = $code");

$item;
$Titem;
$nome;
$preco;
$categoria;
$compra;
$displayitem;
$exp;
foreach ($rows as $row) :
  $item = $row["item"];
  $nome = $row["nome"];
  $preco = $row["preco"];
  $categoria = $row["categoria"];
  $Titem = $row["itotal"];
  $compra = $row["compra"];
  $exp = $row["exp"];
endforeach;

$bool = true;
$caixa;
$resto = $Titem;
while ($bool) {
  if ($resto >= $item) {
    $resto -= $item;
    $caixa++;
  } else {
    $bool = false;
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/main.css">
  <link href='vendor/boxicon/css/boxicons.css' rel='stylesheet'>
  <script src="assets/js/jquery-3.6.1.js"></script>
  <title>Adicionar <?= $nome ?></title>
</head>
<style>
  body {
    overflow-y: hidden;
  }
</style>

<body>
  <div class="main">
    <div class="container">
      <div class="header">
        <div class="logo">
          <h1>
            <i class='bx bx-package'></i>Stock schop
          </h1>
        </div>
        <div></div>
      </div>
      <div class="corpo">
        <nav>
          <div class="nave">
            <a href="../index.php"><i class='bx bx-home'></i><br>home</a>
            <a href="../relatorio.php"><i class='bx bx-hdd'></i> relatorio</a>
            <a href="../cadastro.php"><i class='bx bx-archive'></i>cadastro</a>
            <a href="../compras.php"><i class='bx bx-clipboard'></i>Compras</a>
            <a href=""><i class='bx bxs-calculator'></i>Operadores</a>
          </div>
        </nav>
        <section style="width:100%">
          <div>
            <h2><a href="./cadastro.php" class="voltar"><i class='bx bx-chevron-left'></i></a> Fortificar stock (Compras)</h2>
          </div>
          <div>
            <label for="">Nome: <?= $nome ?></label><br>
            <label for="">Categoria: <?= $categoria ?></label><br>
            <label for="">Quantidade: <?= $caixa ?>/<?= $resto ?> Caixas</label><br>
            <label for="">Preco de venda: <?= number_format($preco, 2, ',', '.') . " AOA"; ?></label><br>
            <label for="">Preco de compra: <?= number_format($compra, 2, ',', '.') . " AOA"; ?></label><br>
            <label for="">Data de EXP: <?= $exp; ?></label><br>

          </div>
          <style>
            #list{
              padding: 7px;
              border: 1px solid #ddd;
              outline:none
            }
            #list2{
              padding: 8px;
              border: 1px solid #ddd;
              outline:none;
              margin-right: -5px;
            }
            #ok{
              background-color: green;
              color: white;
              padding: 15px;
              width: 500px;
              border: 1px solid greenyellow;
              border-radius: 7px;
              margin-top: 70px;
            }
            #btn{
              padding: 10px;
              border: none;
              width: 258px;
              background-color: rgb(40,40,40);
              color: white;
              border-radius: 4px;
              margin-top: 40px;
            }
          </style>
          <div class="tabela">
            <center>
              <h3>Adicionar Compra</h3><br>
              <form action="./classes/add.php" method="get">
                <input type="number" name="numero" id="list2">
                <input type="text" name="preco" style="display:none;" value="<?= $compra ?>">
                <input type="text" name="nome" style="display:none;" value="<?= $nome ?>">
                <input type="text" name="itemp" style="display:none;" value="<?= $item ?>">
                <input type="text" name="itemt" style="display:none;" value="<?= $Titem ?>">
                <input type="text" name="code" style="display:none;" value="<?= $code ?>">
                <select name="tipo" id="list">
                  <option value="Caixa">Caixa</option>
                  <option value="Item">Item</option>
                </select><br>
                <input type="submit" value="Cadastrar" id="btn">
              </form>


              <?php if ($_REQUEST['info'] == "ok") : ?>
                <div>
                  <h1 id="ok">Produto adicionado com sucesso</h1>
                </div>
              <?php endif; ?>
            </center>
          </div>
        </section>
      </div>
    </div>
  </div>
  <br>

  <div style="position: absolute;top:10px;right:10px;color:white">
    <?= '
        <h1>' . number_format($compra, 2, ',', '.') . ' AOA</h1>
        ' ?>
  </div>
  <?php require 'script.php'; ?>
</body>

</html>