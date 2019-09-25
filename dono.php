<?php
	if($_GET['usu']=='admin'){
	?>
		<form name="form-login" id="form-login" method="post" action="index.php?pg=tela_cadusu">
			<div class="form-group botao-centralizado">
				<button type="submit" class="btn btn-primary">Cadastrar Novo Usuário</button>
			</div>
		</form>
	<?php
	}
?>