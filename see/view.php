<?php @$code = $_REQUEST['code'] ;
$quey;
if (isset($_GET['categoria'])) {
  if ($_GET['categoria'] == "TDV") {
    $quey = "SELECT * FROM `Tcarrinho` WHERE id_clinete = '".$code."'";
  }
  if ($_GET['categoria'] == "TPA") {
    $quey = "SELECT * FROM `Tcarrinho` WHERE id_clinete = '".$code."' AND TDP = 'multicaixa'";
  }
  if ($_GET['categoria'] == "TAM") {
    $quey = "SELECT * FROM `Tcarrinho` WHERE id_clinete = '".$code."' AND TDP = 'dinheiro'";
  }
} else {
  $quey = "SELECT * FROM `Tcarrinho` WHERE id_clinete = '".$code."'";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/main.css">
  <link href='../vendor/boxicon/css/boxicons.css' rel='stylesheet'>
  <script src="../assets/js/jquery-3.6.1.js"></script>
  <title>Document</title>
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
                <a href="../cc/"><i class='bx bxs-calculator'></i>Operadores</a>
            </div>
        </nav>
        <section style="width:100%">
          <div class="sub-header">
            <h2>
              <div>
                <a href="../relatorio.php" class="voltar"><i class='bx bx-chevron-left'></i></a>
                Detalhes: <?= @$_REQUEST['code'] ?>
              </div>
            </h2>
            <div id="buttons">
              <a href="./compras.php?code=<?= @$_REQUEST['code'] ?>">Compras</a>
              <a href="./abertura.php?code=<?= @$_REQUEST['code'] ?>">Abertura</a>
            </div>
          </div>
          <style>
            .top {
              position: absolute;
              top: 35px;
              left: 25%;
            }

            .top2 {
              position: absolute;
              left: 45%;
              top: 35px;
            }

            #list {
              padding: 7px;
              border: 1px solid #ddd;
              outline: none;
            }
          </style>
          <div class="insert top">
            <div>
              <label for="">Tipo de vendas</label>
              <form action="" method="get" class="insert">
                <input style="display:none" type="text" value="<?=$_REQUEST['code']?>" name="code">
                <select name="categoria" id="list">
                  <option value="TDV">Todas vendas</option>
                  <option value="TPA">Vendas com multicaixa</option>
                  <option value="TAM">Vendas com dinheiro </option>
                </select>
                <input type="submit" value="verificar">
              </form>
            </div>
          </div>
          <div class="insert top2">
            <div>
              <label for="">Produtos vendidos</label>
              <form action="" method="get" class="insert">
              <input style="display:none" type="text" value="<?=$_REQUEST['code']?>" name="code">
                <select name="produto" id="list">
                <?php require '../cc/config.php'; $rows = mysqli_query($conn, "SELECT DISTINCT nome FROM vendidos WHERE id_relatorio=$code;");?>
                <?php foreach ($rows as $row) : ?>
                  <option value="<?=$row["nome"]?>"><?=$row["nome"]?></option>
                <?php endforeach; ?>
                </select>
                <input type="submit" value="verificar">
              </form>
            </div>
          </div>
          <div class="tabela">
          <?php if (!isset($_GET['produto'])) : ?>
            <div class="tabela">
              <table>
                <tr>
                  <th>N</th>
                  <th>ID Clinete</th>
                  <th>Data</th>
                  <th>Descricao</th>
                  <th>Total</th>
                  <th>Pago</th>
                  <th>Troco</th>
                  <th>TDP</th>
                  <th>Opcoes</th>
                </tr>
                <?php
                require '../cc/config.php';
                $rows = mysqli_query($conn, $quey);
                $i = 1;
                $total;
                ?>
                <?php foreach ($rows as $row) : ?>
                  <tr id=<?php echo $row["id"]; ?>>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row["id_clinete"]; ?></td>
                    <td><?php echo $row["data"]; ?></td>
                    <td><?php echo $row["descricao"]; ?></td>
                    <td><?php echo number_format($row["total"], 2, ',', '.') . " AOA" ?></td>
                    <td><?php echo number_format($row["pagamento"], 2, ',', '.') . " AOA" ?></td>
                    <td><?php echo number_format($row["troco"], 2, ',', '.') . " AOA" ?></td>
                    <td><?php echo $row["TDP"]; ?></td>
                    <?php $total += $row["total"]; ?>
                    <td>
                      <a id="details" href="details.php?id=<?php echo $row['id_relatorio']; ?>&code=<?php echo $row['id_clinete']; ?>"><i class='bx bx-edit'></i> Detalhes</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </table><?php endif; ?>
            <?php if (isset($_GET['produto'])) : ?>
              <table>
                <tr>
                  <th>N</th>
                  <th>Data hora</th>
                  <th>Barcode</th>
                  <th>Produto</th>
                  <th>Categoria</th>
                  <th>Preco</th>
                  <th>Quantidade</th>
                  <th>Total</th>
                </tr>
                <?php
                require '../cc/config.php';
                $rows = mysqli_query($conn, "SELECT * FROM `vendidos` WHERE nome = '".$_GET["produto"]."' AND id_relatorio='$code';");
                $i = 1;
                $total;
                ?>
                <?php foreach ($rows as $row) : ?>
                  <tr id=<?php echo $row["id"]; ?>>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row["id_cliente"]; ?></td>
                    <td><?php echo $row["codigo"]; ?></td>
                    <td><?php echo $row["nome"]; ?></td>
                    <td><?php echo $row["categoria"]; ?></td>
                    <td><?php echo number_format($row["preco"], 2, ',', '.') . " AOA" ?></td>
                    <td><?php echo $row["qtd"]; ?></td>
                    <td><?php echo number_format($row["total"], 2, ',', '.') . " AOA" ?></td>
                    <?php $total += $row["total"]; ?>
                  </tr>
                <?php endforeach; ?>
              </table>
            <?php endif; ?>
            </div>
        </section>
      </div>
    </div>
  </div>
  <div style="position: absolute;top:10px;right:10px;color:white">
    <?= '
        <h1>' . number_format($total, 2, ',', '.') . ' AOA</h1>
        ' ?>
  </div>
  <?php require 'script.php'; ?>
</body>

</html>