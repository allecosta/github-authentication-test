<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Github Authentication Test</title>

</head>

<body>
	<H2>Teste de Autenticação de Repositório Remoto</H2>

	<p>
		Recentemente, mais precisamente a partir de 13 de agosto de 2021, o github fez um update na forma de autenticação para subir projetos do repositório local para o remoto. 
		Desde então, coincidência ou não, tenho tido alguns problemas para atualizar os meus projetos :-(
	</p>

	<?php 

	$userName = "novousuario";
	$password = "admin37";

	if ($userName == true && $password == true) {

		echo "Autenticação realizada com sucesso :D";

	} else {

		echo "Authentication failed :-(";
	}

	?>

	<p>
		Teste realizado com sucesso! Conseguir upar este teste lá para o meu repositório remoto utilizando uma chave SSH.
		Vale lembrar que há uma segunda forma de autenticação que seria via Token.
	</p>

</body>

</html>