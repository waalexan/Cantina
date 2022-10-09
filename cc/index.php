<?php
$pdo = new PDO('mysql:host=127.0.0.1;dbname=hardsoft', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = $pdo->prepare("SELECT * FROM `dados_da_abertura`");
$sql->execute();
$linhas = $sql->fetchAll(PDO::FETCH_OBJ);

$id;

foreach ($linhas as $aa) :
  $id = $aa->id;
endforeach;

if ($id == "") {
  header("Location: ../index.php");
} else {
}
$quey;
if (isset($_GET['categoria'])) {
  if ($_GET['categoria'] == "TDV") {
    $quey = "SELECT * FROM `carrinho` ORDER BY `carrinho`.`data` DESC";
  }
  if ($_GET['categoria'] == "TPA") {
    $quey = "SELECT * FROM `carrinho` WHERE TDP = 'multicaixa' ORDER BY `carrinho`.`data` DESC";
  }
  if ($_GET['categoria'] == "TAM") {
    $quey = "SELECT * FROM `carrinho` WHERE TDP = 'dinheiro' ORDER BY `carrinho`.`data` DESC";
  }
} else {
  $quey = "SELECT * FROM `carrinho` ORDER BY `carrinho`.`data` DESC";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/main.css">
  <script src="../assets/js/jquery-3.6.1.js"></script>
  <script src="../vendor/html2pdf/dist/html2pdf.bundle.js"></script>
  <link href='../vendor/boxicon/css/boxicons.css' rel='stylesheet'>
  <title>Document</title>
</head>

<body>
  <style>
    body {
      overflow: hidden;
    }

    ul {
      list-style-type: none;
      width: 300px;
      height: auto;
      position: absolute;
      margin-top: 10px;
      margin-left: 10px;
      background-color: #EEEEEE;
      border: 1px solid #ddd;
      border-radius: 15px;
      border-top-left-radius: 0px;
      padding: 10px;
    }

    li {
      background-color: #EEEEEE;
      padding: 10px;
      width: 100%;
      float: left;
      cursor: pointer;
    }

    li:hover {
      transition: 0.4s;
      background-color: #fff;
      border: none;
      border-radius: 10px;
      border-top-left-radius: 0px;
    }

    #ver {
      text-decoration: none;
      font-size: 12pt;
    }

    #ver:hover {
      font-weight: 600;
    }
  </style>
  <div class="result"></div>
  <script type="text/javascript">
    function act() {
      $.ajax({
        url: "datetime/displaydate.php",
        success: function(result) {
          $(".result").html(result)
        },
        error: function() {
          $(".result").html("error")
        }
      });
    }

    setInterval(act, 100);
  </script>
  <div class="main">
    <div class="container">
      <?php include_once('../layouts/header.php') ?>
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
        <section style="width:95%">
          <a href="cliente.php" id="novocar">+ Novo carrinho</a>
          <center>
            <h2>Lista de vendas feitas</h2>
          </center>
          <style>
            .top {
              position: absolute;
              top: 35px;
            }

            .top2 {
              position: absolute;
              right: 0;
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
                <select name="produto" id="list">
                <?php require 'config.php'; $rows = mysqli_query($conn, "SELECT DISTINCT nome FROM venda;");?>
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
                require 'config.php';
                $rows = mysqli_query($conn, $quey);
                $i = 1;
                $total;
                ?>
                <?php foreach ($rows as $row) : ?>
                  <tr id=<?php echo $row["id"]; ?>>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["data"]; ?></td>
                    <td><?php echo $row["descricao"]; ?></td>
                    <td><?php echo number_format($row["total"], 2, ',', '.') . " AOA" ?></td>
                    <td><?php echo number_format($row["pagamento"], 2, ',', '.') . " AOA" ?></td>
                    <td><?php echo number_format($row["troco"], 2, ',', '.') . " AOA" ?></td>
                    <td><?php echo $row["TDP"]; ?></td>
                    <?php $total += $row["total"]; ?>
                    <td>
                      <a id="details" href="preview.php?id=<?php echo $row['id']; ?>"><i class='bx bx-edit'></i> Detelhes</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </table>
            <?php endif; ?>
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
                require 'config.php';
                $rows = mysqli_query($conn, "SELECT * FROM `venda` WHERE nome = '".$_GET["produto"]."';");
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
            <br>
            <?= '
              <div class="top-dados">
                <div class="wrapper">
                  <a href="#modalbox" id="feicho">FEICHO</a>
                </div>
                <h1>' . number_format($total, 2, ',', '.') . ' AOA</h1>
              </div>'
            ?>
            <div id="modalbox" class="modal">
              <div class="modalcontent">
                <div id="message"></div>
                <form action="../classes/feicho.php" method="post">
                  RESPONSAVEL: <input type="txt" name="responsavel" value="Sistema" /><br>
                  DATA: <input type="txt" name="data" value="<?php echo date("d/m/Y") ?>" /><br>
                  TOTAL: <input type="text" name="total" value="<?php echo $total ?>" /><br>
                  <input type="submit" value="Feicho">
                </form>
                <center>
                    <div style="display:none"><?php include_once('./pdf.php') ?></div>
                    <button onclick="downloadPDF()" style="width:100%;padding:10px;border:none;background:green;color:white;border-radius:4px" >
                      <i class="bx bx-export"></i> Exportar PDF
                    </button>
                    <?php include_once("./exportpdf.php") ?>
                  </center>
                <a href="#" class="modalclose">&times;</a>
              </div>
            </div>
            <script>
              var input = document.getElementById('srcCode');
              var enviado = document.querySelector('#enviado');
              input.addEventListener('keydown', function(e) {
                if (e.keyCode == 13) {
                  e.preventDefault();
                  return enviar(this.value);
                }
              });

              function enviar(texto) {
                window.location.href = "../classes/preencher.php?code=" + texto
              }
            </script>
            <?php require 'script.php'; ?>
          </div>
        </section>
      </div>
    </div>
  </div>
</body>

</html>
</body>