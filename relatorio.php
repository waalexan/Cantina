<?php
$total;
$quey;
if (isset($_GET['search'])) {
  if ($_GET['search'] == "all") {
    $quey = "SELECT * FROM `relatorios` ORDER BY `relatorios`.`data` DESC";
  }
  else{
    $quey = "SELECT * FROM `relatorios` WHERE `data` = '".$_GET['search']."'";
  }
} else {
  $quey = "SELECT * FROM `relatorios` ORDER BY `relatorios`.`data` DESC";
}
?>
<!DOCTYPE html>
<html lang="pt-br">

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
      <?php include_once('./layouts/header.php') ?>
      <div class="corpo">
        <nav>
          <?php include_once('./layouts/side.php') ?>
        </nav>
        <section style="width:100%">
          <div class="sub-header">
            <div>
              <h2><a href="index.php" class="voltar"><i class='bx bx-chevron-left'></i></a> Relatorio de vendas</h2>
            </div>
            <div>
              <style>
                .top {
                  position: absolute;
                  top: 35px;
                  right: 0;
                }

                #list {
                  padding: 7px;
                  border: 1px solid #ddd;
                  outline: none;
                }
              </style>
              <div class="insert top">
                <div>
                  <label for="">Lista das datas dos relatorios</label>
                  <form action="" method="get" class="insert">
                    <select name="search" id="list">
                    <option value="all">Todos relatorios</option>
                    <?php require './cc/config.php'; $rows = mysqli_query($conn, "SELECT DISTINCT  `data` FROM relatorios ORDER BY `relatorios`.`data` DESC");?>
                    <?php foreach ($rows as $row) : ?>
                      <option value="<?=$row["data"]?>"><?=$row["data"]?></option>
                    <?php endforeach; ?>
                    </select>
                    <input type="submit" value="verificar">
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="tabela">
            <table>
              <tr>
                <th>Id</th>
                <th>Data</th>
                <th>Descricao</th>
                <th>Vendas</th>
                <th>Opcoes</th>
              </tr>
              <?php
              require 'cc/config.php';
              $rows = mysqli_query($conn, $quey);
              $i = 1;
              ?>
              <?php foreach ($rows as $row) : ?>
                <tr id=<?php echo $row["id"]; ?>>
                  <td><?php echo $row["id"]; ?></td>
                  <td><?php echo $row["data"]; ?></td>
                  <td><?php echo $row["funcionario"]; ?></td>
                  <td><?php echo number_format($row["Saida"], 2, ',', '.') . " AOA" ?></td>
                  <?php $total += $row["Saida"]; ?>
                  <td>
                    <a id="details" href="see/view.php?code=<?php echo $row['id']; ?>"><i class='bx bxs-message-alt-detail'></i>details</a>
                    <a id="delete" href="see/deletar.php?code=<?php echo $row['id']; ?>"><i class="bx bx-trash"></i>apagar</a>
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