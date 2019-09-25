<?php
	include "conectar.php";
	include "verificar-sessao.php";
	include "dono.php";

	$diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado');

	$diasemana_numero = date('w', time());

	//echo $diasemana[$diasemana_numero];
?>	
		
<table class="table table-striped table-hover">
	<thead>
		<tr align="center">
		  <th width="100%" scope="col" align="center"><?php echo $diasemana[$diasemana_numero]; ?></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php 

			$sql = "SELECT * FROM treino WHERE login = '".$_GET['usu']."'";
			
			$result = mysqli_query($conexao, $sql);
			
			$linha = mysqli_fetch_assoc($result);


			?>
			<tr  align="center">
				<td><?php 

				if($diasemana[$diasemana_numero]=='Sabado' || $diasemana[$diasemana_numero]=='Domingo'){
						echo "Hoje é dia de descansar.";
				}else{
					echo $linha[strtolower($diasemana[$diasemana_numero])];} ?></td>
			</tr>
	</tbody>
</table>