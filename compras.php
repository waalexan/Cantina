<?php
$total;
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
      <?php include_once ('./layouts/header.php')?>
      <div class="corpo">
        <nav>
          <?php include_once ('./layouts/side.php')?>
        </nav>
        <section style="width:100%">
          <div class="sub-header">
            <div>
              <h2><a href="index.php" class="voltar"><i class='bx bx-chevron-left'></i></a> RELATORIO DAS COMPRAS</h2>
            </div>
            <div>
              <form action="">
               </form>
            </div>
          </div>
          <div class="tabela">
            <table>
              <tr>
                <th>Cout</th>
                <th>Data</th>
                <th>Produto</th>
                <th>Preco</th>
                <th>Qtd</th>
                <th>Total</th>
                <th>Opcao</th>
              </tr>
              <?php
              require 'cc/config.php';
              $rows = mysqli_query($conn, "SELECT * FROM `compras` ORDER BY `compras`.`Data` DESC");
              $i = 1;
              ?>
              <?php foreach ($rows as $row) : ?>
                <tr id=<?php echo $row["id"]; ?>>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $row["Data"]; ?></td>
                  <td><?php echo $row["Produto"]; ?></td>
                  <td><?php echo number_format($row["Preco"], 2, ',', '.') . " AOA" ?></td>
                  <td><?php echo $row["Quantidade"]; ?></td>
                  <td><?php echo number_format($row["Total"], 2, ',', '.') . " AOA" ?></td>
                  <?php $total += $row["Total"];
                  $i++ ?>
                  <td>
                    <a id="delete" href="see/cdeletar.php?data=<?php echo $row['Data']; ?>&produto=<?php echo $row['Produto'];?>&id=<?php echo $row['id_relatorio'];?>&total=<?php echo $row['Total'];?>"><i class="bx bx-trash"></i> Apagar</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </table>
          </div>
        </section>
      </div>
    </div>
  </div>
  <br>

  <div style="position: absolute;top:10px;right:10px;color:white">
    <?= '
        <h1>' . number_format($total, 2, ',', '.') . ' AOA</h1>
        ' ?>
  </div>
  <?php require 'script.php'; ?>
</body>

</html>