<form name="form-login" id="form-login" method="post" action="updatecrono.php" onsubmit="return validaForm()">
				
	<p class="info" align="center">Cronograma do Aluno</p>

	<?php if(isset($_GET['erro'])){ ?>
				
	<p class="error">Usuário ou senha inválidos</p>
	
	<?php } ?>

	<div class="form-group">
		<label for="txt_login">Usuário:</label> 
		<input class="form-control" type="text" name="usu" id="usu" />
	</div>

	<div class="form-group">
		<label for="txt_login">Segunda:</label> 
		<input class="form-control" type="text" name="segunda" id="segunda" />
	</div>

	<div class="form-group">
		<label for="txt_login">Terça:</label> 
		<input class="form-control" type="text" name="terca" id="terca" />
	</div>

	<div class="form-group">
		<label for="txt_login">Quarta:</label> 
		<input class="form-control" type="text" name="quarta" id="quarta" />
	</div>

	<div class="form-group">
		<label for="txt_login">Quinta:</label> 
		<input class="form-control" type="text" name="quinta" id="quinta" />
	</div>

	<div class="form-group">
		<label for="txt_login">Sexta:</label> 
		<input class="form-control" type="text" name="sexta" id="sexta" />
	</div>
				
	<div class="form-group botao-centralizado">
		<button type="submit" class="btn btn-primary">Atualizar</button>
	</div>
				
</form>

<form name="form-login" id="form-login" method="post" action="updatedados.php" onsubmit="return validaForm()" enctype="multipart/form-data">

	<p class="info" align="center">Dados do Usuário</p>

	<div class="form-group">
		<label for="txt_login">Login:</label> 
		<input class="form-control" type="text" name="login" id="login" placeholder="Informe o Login"/>
	</div>

	<div class="form-group">
		<label for="txt_login">Nome:</label> 
		<input class="form-control" type="text" name="nome" id="nome" placeholder="Informe o nome"/>
	</div>

	<div class="form-group">
		<label for="txt_login">Endereço:</label> 
		<input class="form-control" type="text" name="endereco" id="endereco" placeholder="Informe o endereço"/>
	</div>

	<div class="form-group">
		<label for="txt_login">Contato:</label> 
		<input class="form-control" type="text" name="contato" id="contato" placeholder="Informa um contato"/>
	</div>

	<div class="form-group">
		<label for="txt_login">Data de Nascimento:</label> 
		<input class="form-control" type="text" name="datanasc" id="datanasc" placeholder="Ano-Mês-Dia"/>
	</div>

	<div class="form-group">
		<label for="txt_login">Peso:</label> 
		<input class="form-control" type="text" name="peso" id="peso" placeholder="Informe o peso"/>
	</div>

	<div class="form-group">
		<label for="txt_login">Altura:</label> 
		<input class="form-control" type="text" name="altura" id="altura" placeholder="Informe a altura"/>
	</div>

	<input type="hidden" name="acao" value="inserir" />
	
	<div class="form-group botao-centralizado">
		<button type="submit" class="btn btn-primary">Atualizar</button>
	</div>
</form>