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
	<div class="container">
		
		<?php
			require_once("lista.php");

			if(!empty($_POST)){

				$numero = $_POST['numero'];

				if(!empty($numero)){

					if(is_numeric($numero)){

						if(strlen($numero) == 4){

							$selec = $con->query("SELECT * FROM candidatos WHERE numero = '$numero' ")->fetchAll();
 
							// atribuindo a quantidade de linhas retornadas
							$counta = count($selec);

							if($counta > 0){
								$stmt = $con->prepare("INSERT INTO votacao(num_candidatos) VALUES(?)");
								$stmt->bindParam(1, $numero);
								$stmt->execute();
								echo "<div class=\"alert alert-success\">Voto Acumulado!</div>";
							}else{
								echo "<div class=\"alert alert-warning\">Candidato não cadastrado!</div>";
							}

						}else{
							echo "<div class=\"alert alert-warning\">São permitidos apenas 4 números!</div>";
						}

					}else{
						echo "<div class=\"alert alert-warning\">São permitidos apenas números!</div>";
					}
					
				}else{
					echo "<div class=\"alert alert-danger\">Preencha o campo!</div>";
				}
			}
		?>

		<form method="post">
			Número: <input type="text" name="numero" maxlength="4"><br>
			<input type="submit" value="Votar">
		</form>
		
	</div>
</body>
</html>
