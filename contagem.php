<?php
   // chamando o arquivo com as configurações de acesso ao banco
   include('conexao.php');
 
   $num = $row->numero;
   // recebendo o resultado da consulta
   $select = $con->query("SELECT * FROM votacao WHERE num_candidatos = '$num'")->fetchAll();
 
   // atribuindo a quantidade de linhas retornadas
   $count = count($select);
 
   // imprimindo o resultado
   print $count;
?>