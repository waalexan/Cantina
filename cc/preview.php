<?php
$pdo = new PDO('mysql:host=127.0.0.1;dbname=hardsoft', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = $pdo->prepare("SELECT * FROM `dados_da_abertura`");
$sql->execute();
$linhas = $sql->fetchAll(PDO::FETCH_OBJ);

session_start();
$_SESSION['revendacode']=$_REQUEST['id'];
$id;

foreach ($linhas as $aa) :
  $id = $aa->id;
endforeach;

if ($id == "") {
  header("Location: ../index.php");
} else {
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
  <link href='../vendor/boxicon/css/boxicons.css' rel='stylesheet'>
  <title><?= $_SESSION['revendacode']?></title>
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
  </style>
  <div class="result"></div>
  <script type="text/javascript">
		
		function act(){
			$.ajax({
				url: "datetime/displaydate.php",
				success: function(result){
					$(".result").html(result)
				},
				error: function(){
					$(".result").html("error")
				}
			});
		}

		setInterval(act,100);

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
                <a href="./"><i class='bx bxs-calculator'></i>Operadores</a>
            </div>
        </nav>
        <section style="width:95%">
          <?php if (isset($_REQUEST['code'])) : ?>
            <form action="./revenda.php" method="post" class="insert">
              <div>
                <label for="">Barcode</label>
                <input type="text" name="barcode" required value="<?= $_REQUEST['code'] ?>">
              </div>
              <div>
                <label for="">Produto</label>
                <input type="text" name="produto" required value="<?= $_REQUEST['nome'] ?>">
              </div>
              <div>
                <label for="">Categoria</label>
                <input type="text" name="categoria" required value="<?= $_REQUEST['categoria'] ?>">
              </div>
              <div>
                <label for="">Preco</label>
                <input type="text" name="preco" required value="<?= $_REQUEST['preco'] ?>">
              </div>
              <div>
                <label for="">Quantidade</label>
                <input type="text" name="qtd" required id="qtd">
              </div>
              <div>
                <button type="submit"><i class='bx bx-cart-add'></i> Add</button>
              </div>
            </form>
            <script>
              window.onload = function() {
                document.getElementById("qtd").focus();
              }
            </script>
          <?php endif; ?>


          <?php if (!isset($_REQUEST['code'])) : ?>
            <div style="margin-left:30%;">
              <div class="insert">
                <div>
                  <label for="">Barcode</label>
                  <input type="text" id="srcCode">
                </div>
                <div>
                  <label for="">Produto</label>
                  <input type="text" name="produto" id="campo">
                  <ul id="lista"></ul>
                  <script src="./repeticiones.js"></script>
                </div>
              </div>
            </div>
            <script>
              window.onload = function() {
                document.getElementById("srcCode").focus();
              }
            </script>
          <?php endif; ?>
          <center>
            <h2>Lista de produtos vendidos</h2>
          </center>
          <div class="tabela">
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
                <th>Opcoes</th>
              </tr>
              <?php
              require 'config.php';
              $rows = mysqli_query($conn, "SELECT * FROM venda WHERE id_carrinho = '".$_REQUEST['id']."' ORDER BY `venda`.`id_cliente` DESC");
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
                  <td>                    
                    <a id="delete" href="Rdelete.php?code=<?php echo $row['codigo']; ?>&qtd=<?php echo $row['qtd']; ?>&id=<?php echo $row['id_cliente']; ?>"><i class="bx bx-trash"></i> Cancelar</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </table>
            <br>
            <?= '
              <div class="top-dados">
                <div class="wrapper">
                  <a href="#modalbox" id="feicho" style="background:green">Concluir venda</a>
                </div>
                <h1>' . number_format($total, 2, ',', '.') . ' AOA</h1>
              </div>'
            ?>
            <div id="modalbox" class="modal">
              <div class="modalcontent">
                <div id="message"></div>
                <form action="./Rinsertcliente.php" method="post">
                  DESCRICAO: 
                  <input type="txt" name="responsavel" value="Sistema" /><br>
                  TOTAL: <input type="text" name="total" id="total" value="<?php echo $total ?>" /><br>
                  PAGO: <input type="txt" name="pago" value="" id="pago"><br>
                  FORMA DE PAGAMENTO: <br>
                  <select name="tdp" id="" style="width:100%;padding:10px;border:1px solid #ddd;border-radius:2px;outline: none;">
                    <option value="dinheiro">Dinheiro</option>
                    <option value="multicaixa">Multicaixa</option>
                  </select><br><br>
                  TROCO: <input type="txt" name="troco" id="troco" style="border:none;font-size:20pt"/><br>
                  <input type="submit" value="Vender">
                  <script>
                    var input = document.getElementById('pago');
                    var total = document.getElementById('total');
                    var troco = document.querySelector('#troco');
                    input.addEventListener('keyup', function(e) {
                      let Troco=this.value-total.value
                      troco.value=Troco
                    });
                  </script>
                </form>
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
                window.location.href = "../classes/repreencher.php?code=" + texto
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