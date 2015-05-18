<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		require_once('conexao.php');
		require_once('envia.php');
	?>
	<form action="" method="post">
		<label>Nome Candidato: </label><input type="text" name="nome"><br>
		<label>Número Candidato: </label><input type="text" name="numero"><br>
		<label>Partido Candidato: </label><input type="text" name="partido"><br>
		<input type="submit" value="enviar">
	</form>
</body>
</html>