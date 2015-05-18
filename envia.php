<?php

	if(!empty($_POST)){
		$nome = $_POST['nome'];
		$numero = $_POST['numero'];
		$partido = $_POST['partido'];

		$stmt = $con->prepare("INSERT INTO candidatos(nome, numero, partido) VALUES(?, ?, ?)");
		$stmt->bindParam(1, $nome);
		$stmt->bindParam(2, $numero);
		$stmt->bindParam(3, $partido);
		$stmt->execute();
	}
	
?>