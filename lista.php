
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Número</th>
					<th>Partido</th>
					<th>Qtde Votos</th>
				</tr>
			</thead>
			<tbody>
				<?php

					$con = new PDO('mysql:host=localhost;dbname=votos', 'root', '');

					$rs = $con->query("SELECT nome, numero, partido FROM candidatos");
					while($row = $rs->fetch(PDO::FETCH_OBJ)){

						$num = $row->numero;

						// recebendo o resultado da consulta
						$select = $con->query("SELECT * FROM votacao WHERE num_candidatos = '$num'")->fetchAll();

						// atribuindo a quantidade de linhas retornadas
						$count = count($select);
						echo "<tr>";
						echo "<td>" . $row->nome . "</td>";
						echo "<td>" . $row->numero . "</td>";
						echo "<td>" . $row->partido . "</td>";
						echo "<td>" . $count . "</td>";
						echo "</tr>";

					}

				?>
			</tbody>

		</table>

