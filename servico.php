<head>
	<tittle>Empresa Teste - Serviço</tittle>

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/servico.css">
</head>

<body>
<div class="container">
<div class="servico">
	<h1>Encanador</h1>
	<p>R$ 60,00 por hora trabalhada.</p>

	<form method="POST" action="cadastro.php">
		<fieldset class="especificidade">
			<legend>Escolha a especificidade do serviço padronizado por cores.</legend>
			<input type="radio" name="especificidade" value="verde" id="verde" checked>
			<label for="verde">
			<img src="img/encanadorCasa.jpg" alt="Serviço encanador para casa">
			</label>

			<input type="radio" name="especificidade" value="azul" id="azul">
			<label for="azul">
			<img src="img/encanadorIndustria.jpg" alt="Serviço encanador para empresas">
			</label>

			<input type="radio" name="especificidade" value="vermelho" id="vermelho">
			<label for="vermelho">
			<img src="img/encanadorEmpresa.jpg" alt="Serviço encanador para Industria">
			</label>
		</fieldset>

		<button class="comprar">Comprar</button>
	</form>
</div>
</div>


