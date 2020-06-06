<?php 

	if($_GET['nome'])
		$nome = $_GET['nome'];
	if($_GET['senha'])
		$senha = $_GET['senha'];
	if($_GET['senhaConfirm'])
		$senhaConfirm = $_GET['senhaConfirm'];


?>

<HTML>

	<header>
		<title>Curso WebDev</title>
		<meta charset = "utf-8"/>
		<link rel = "stylesheet" type = "text/css" href = "index.css"/>
	</header>

	<body>

		<div id = "header">
			<h1>Curso do Bart!</h1>
		</div>

		<div id = "menu">
			<button class = "menuBotao" href = "index.html">Cadastro</button>

			<button class = "menuBotao" href = "login.html">Login</button>
		</div>

		<div id = "content">
			<center>

				<h1>Faça seu cadastro!</h1>
				<form method="GET" action="index.php">
					<input type = "text" class = "inputCadastro" placeholder = "Nome completo" name="nome"/>
					<br>
					<input type = "password" class = "inputCadastro" placeholder = "Senha" name="senha"/>
					<br>
					<input type = "password" class = "inputCadastro" placeholder = "Senha novamente" name="senhaConfirm"/>
					<br>
					<button type = "submit" class = "menuBotao">Cadastrar</button>
				</form>
			</center>
			<?php 
				if($nome && $senha && $senhaConfirm){
			?>
				<p>Os dados entrados foram: <?php echo "<br/>Nome: " . $nome . "<br/>Senha: " . $senha . "<br/>Senha confirmação: " . $senhaConfirm?></p>
			<?php
				}
			?>
		</div>

		<div id = "footer">
			<p>Site feito por Pedro Reis.</p>
		</div>



	</body>


</HTML>