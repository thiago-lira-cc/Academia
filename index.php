<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta http-equiv="Content-Type" name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<title>Academia</title>
		<link rel="shortcut icon" href="imagens/favicon.ico">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilos.css">
		<script src="js/libs/jquery-3.3.1.min.js"></script>
		<script src="js/libs/bootstrap.min.js"></script>
		<script src="js/libs/jquery.validate.js"></script>
		<script src="js/views/index.js"></script>
	<title></title>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">

  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  		</button>
   
   		<a class="navbar-brand" href="logout.php">Sair</a>
  
  		<div class="collapse navbar-collapse" id="navbarNav">
    		<ul class="navbar-nav">
      			<li class="nav-item active">
        			<a class="nav-link" href="inicio.php">Início<span class="sr-only">(current)</span></a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="testeperfil.php">Perfil</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="testeupdate.php">Atualizar Dados</a>
      			</li>
    		</ul>
  		</div>
	</nav>
	
		<div id="container-imagem">
		
				<img class="logo" src="imagens/logo1.png" alt="Logo" title="Logo"/>
			
		</div>
				<div>
				
					<?php include "paginas.php"; ?>
				
				</div>
		<div id="rodape">
			
				<p>Academia Tal Tal</p>
				
				<p>Desenvolvido por Thiago Lira</p>
			
		</div>		
	</div>
</body>
</html>