<HTML>

	<header>
		<title>Cadastro</title>
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
				<form method="GET" action="process.php">
					<input type = "text" class = "inputCadastro" placeholder = "Nome completo" name="nome"/>
					<br>
					<input type = "password" class = "inputCadastro" placeholder = "Senha" name="senha"/>
					<br>
					<input type = "text" class = "inputCadastro" placeholder = "Email" name="email"/>
					<br>
					<button type = "submit" class = "menuBotao">Cadastrar</button>
				</form>
			</center>
		</div>

		<div id = "footer">
			<p>Site feito por Pedro Reis.</p>
		</div>



	</body>


</HTML>