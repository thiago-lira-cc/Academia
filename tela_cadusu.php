<form name="form-login" id="form-login" method="post" action="cadastra_usuario.php" onsubmit="return validaForm()" enctype="multipart/form-data">
	
<p class="info" align="center">Dados de Login</p>

	<div class="form-group">
		<label for="txt_login">Login</label> 
		<input type="text" class="form-control" name="txt_login" id="txt_login" placeholder="Preencha com o login desejado"/> 
	</div>
	
	<div class="form-group">
		<label for="txt_senha">Senha</label> 
		<input type="text" class="form-control" name="txt_senha" id="txt_senha" placeholder="Informe a senha desejada" /> 
	</div>

	<p class="info" align="center">Dados do Usuário</p>

	<tr>
        <th> Foto: </th>
        <td>
            <input type="file" name="arquivo">
        </td>
    </tr>


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

	<p class="info" align="center">Cronograma de Treinos</p>

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

	<input type="hidden" name="acao" value="inserir" />
	
	<div class="form-group botao-centralizado">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</div>
</form>