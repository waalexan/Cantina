<style>
.pdf-header{
  text-align: center;
  font-size: 15pt;
  margin-bottom: 30px;
}
.info{
  display:flex;
  justify-content: space-between;
}
.left{
  margin-right:20px
}
table{
  width:100%;
}
</style>
<div class="Content">
    <div class="pdf-header">
      <h1>Relatorio de vendas</h1>
      <h4>Mata Sede - Golf 2</h4>
      <h5><?= date("M d/m/Y")?></h5>
    </div>
    <div>
      <label>Resposavel: </label><strong>Sistema</strong><br><br>
      <label>Data/hora: </label><strong><?=date("d/m/Y g:i:s")?></strong><br><br>
      <label>Status: </label><strong>Online</strong><br><br>
    </div>
    <?php $tpa=0;$denh=0; $total=0;$totalP=0?>
    <?php require 'config.php'; $rows = mysqli_query($conn, "SELECT * from carrinho where TDP = 'multicaixa'");?>
    <?php foreach ($rows as $row) : $tp+=$row["total"]; endforeach; ?>

    <?php $rows = mysqli_query($conn, "SELECT * from carrinho where TDP = 'dinheiro'");?>
    <?php foreach ($rows as $row) : $denh+=$row["total"]; endforeach; ?>

    <?php $rows = mysqli_query($conn, "SELECT * from carrinho");?>
    <?php foreach ($rows as $row) : $total+=$row["total"]; endforeach; ?><br>
    <h4>Resumo de vendas:</h4><br>
    <table style="border:1px solid #000">
        <tr style="border-bottom:1px solid #000;">
          <th>Vendas com TPA</th>
          <th>Vendas com Dinheiro</th>
          <th>Total</th>
             <tr>
             <td><?=number_format($tp, 2, ',', '.') . " A0A"?></td>
             <td><?=number_format($denh, 2, ',', '.') . " A0A"?></td>
             <td><strong><?=number_format($total, 2, ',', '.') . " A0A"?></strong></td>
            </tr>
    </table><br><br><br>


    <center><h2>PRODUTOS VENDIDOS</h2></center><br>
    <table style="border:1px solid #000">
        <tr style="border-bottom:1px solid #000">
          <th style="border-right:1px solid #000;">Nome do produto</th>
          <th>Dinheiro arrecadado</th>
            <?php $rows = mysqli_query($conn, "SELECT DISTINCT nome FROM venda");?>
              <?php foreach ($rows as $row) : $totalP=0?>
                <tr style="border-bottom:1px solid #000;">
                <td style="border-right:1px solid #000;"><?=$row["nome"]?></td>
                <?php $Rows = mysqli_query($conn, "SELECT * FROM `venda` WHERE nome = '".$row["nome"]."'")?>
                <?php foreach ($Rows as $row) : ?>   
                    <?php $totalP += $row["total"];?>    
                <?php endforeach; ?>                          
                <td><?=number_format($totalP, 2, ',', '.') . " A0A"?></td>
                </tr>
            <?php endforeach; ?>
    </table>
    <p><i>Programador:Walter Santana</i></p>
  </div>