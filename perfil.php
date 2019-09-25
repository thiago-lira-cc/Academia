<?php
	include "conectar.php";
	include "verificar-sessao.php";
?>	
<tbody>
	<?php 

		$sql = "SELECT * FROM treino WHERE login = '".$_GET['usu']."'";
			
		$result = mysqli_query($conexao, $sql);
			
		$linha = mysqli_fetch_assoc($result);
				
	?>

	<style type="text/css">
		.circle {
		  background-color: #aaa;
		  border-radius: 50%;
		  width: 150px;
		  height: 150px;
		  overflow: hidden;
		  position: relative;
		  top:50%;
		  left:100%;
		}

		.circle img {
		  position: absolute;
		  bottom: 0;
		  width: 100%;
		}

	</style>

	<form name="form-login" id="form-login">

		<table class="table table-striped table-hover">
			<thead>
				<td>
					<div class="circle">
						<img src=<?php echo "fotos/".$_GET['usu'].".jpg"; ?>>	
					</div>
				</td>

				<tr align="center"><td width="16.6%" scope="col">Nome</td> <td><?php echo $linha['nome']; ?></td> </tr>

				<tr align="center"><td width="16.6%" scope="col">Endereço</td> <td><?php echo $linha['endereco']; ?></td> </tr>

				<tr align="center"><td width="16.6%" scope="col">Contato</td> <td><?php echo $linha['contato']; ?></td> </tr>

				<tr align="center"><td width="16.6%" scope="col">Data de Nascimento</td> <td><?php echo $linha['datanasc']; ?></td> </tr>

				<tr align="center"><td width="16.6%" scope="col">Peso</td> <td><?php echo $linha['peso']; ?></td> </tr>

				<tr align="center"><td width="16.6%" scope="col">Altura</td> <td><?php echo $linha['altura']; ?></td> </tr>

			</thead>
		</table>
	</form>
</tbody>