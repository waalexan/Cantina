<?php 
    $query;
	if(isset($_GET["busca"])){
        $query="SELECT * FROM produtos WHERE nome LIKE '%".$_GET["busca"]."%' or categoria LIKE '%".$_GET["busca"]."%' or Codigo LIKE '%".$_GET["busca"]."%' ORDER BY nome ASC"; 
    }else{
        $query="SELECT * FROM `produtos` ORDER BY `produtos`.`nome` ASC";    
    }
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=hardsoft','root',''); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql =$pdo->prepare($query);
	$sql->execute();
	$linhas=$sql->fetchAll(PDO::FETCH_OBJ);

    $total;
	$compra;

	echo '
		<table id="table">
		<tr>
			<th>Status</th>
			<th>Codigo</th>
			<th>Produto</th>
			<th>Categoria</th>
			<th>Preco</th>
			<th>Qunatidade</th>
			<th>Total</th>
		</tr>
	';
	foreach ($linhas as $aa) :

        $aa->caixas;
        $aa->item;
        $aa->itotal;

		$bool=true;
		$caixa=0;
		$resto=$aa->itotal;
		while($bool){
			if ($resto>=$aa->item) {
				$resto-=$aa->item;
				$caixa++;
			} else {
				$bool=false;
			}			
		}
      
        $total+=$aa->stock;
		$compraT=$caixa*$aa->compra;
		$compra+=$compraT;


		if ($aa->itotal<=$aa->alertI) {
			echo '
			<tr>
				<td style="color:white;background:#DC143C">BAIXO</td>
				<td style="color:white;background:#DC143C">'.$aa->Codigo.'</td>
				<td style="color:white;background:#DC143C">'.$aa->nome.'</td>
				<td style="color:white;background:#DC143C">'.$aa->categoria.'</td>
				<td style="color:white;background:#DC143C">'.bcadd($aa->preco,'0',2).'</td>
				<td style="color:white;background:#DC143C">'.$caixa.'/'.$resto.'</td>
				<td style="color:white;background:#DC143C;text-align:center;">'.number_format($aa->stock, 2, ',', '.').' AOA</td>
				<td style="display:none">'.bcadd($aa->compra,'0',2).'</td>
				<td style="display:none">'.$aa->item.'</td>
				<td style="display:none">'.$aa->caixas.'</td>
			</tr>		
		';
		} else {
			$data_inicio =new DateTime(date("Y/m/d"));
			$data_fim = new DateTime($aa->exp);

			// Resgata diferença entre as datas
			$dateInterval = $data_inicio->diff($data_fim);
			if ($dateInterval->y==0 && $dateInterval->m<6) {				
				echo '
					<tr>
						<td style="color:white;background:#DAA520;color:red">EXP</td>
						<td style="color:white;background:#DAA520">'.$aa->Codigo.'</td>
						<td style="color:white;background:#DAA520">'.$aa->nome.'</td>
						<td style="color:white;background:#DAA520">'.$aa->categoria.'</td>
						<td style="color:white;background:#DAA520">'.bcadd($aa->preco,'0',2).'</td>
						<td style="color:white;background:#DAA520">'.$caixa.'/'.$resto.'</td>
						<td style="color:white;background:#DAA520;text-align:center;">'.number_format($aa->stock, 2, ',', '.').' AOA</td>
						<td style="display:none">'.bcadd($aa->compra,'0',2).'</td>
						<td style="display:none">'.$aa->item.'</td>
						<td style="display:none">'.$aa->caixas.'</td>
					</tr>		
				';
			} else {
				echo '
				<tr>
					<td><img src="image/ilustracao-3d-da-seta-para-baixo-e-para-cima-com-fundo-branco_372682-24.webp" alt="" class="perfil"></td>
					<td>'.$aa->Codigo.'</td>
					<td>'.$aa->nome.'</td>
					<td>'.$aa->categoria.'</td>
					<td>'.bcadd($aa->preco,'0',2).'</td>
					<td>'.$caixa.'/'.$resto.'</td>
					<td style="text-align:center;">'.number_format($aa->stock, 2, ',', '.').' AOA</td>
					<td style="display:none">'.bcadd($aa->compra,'0',2).'</td>
					<td style="display:none">'.$aa->item.'</td>
					<td style="display:none">'.$aa->caixas.'</td>
				</tr>		
			';
			}
			
		}
		

	endforeach;
	echo "</table>";
    echo '<div style="position: absolute;top:5px;right:10px;color:white">
			<h1>STOCK: '.number_format($total, 2, ',', '.').' AOA  |  ARMAZEM: '.number_format($compra, 2, ',', '.').' AOA </h1>
		  </div>';
 ?>