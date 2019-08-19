<?php

 	$host = "localhost";
 	$usuario = "root";
 	$senha = "";
 	$banco = "etec";

 	$conexao = new MySQLi("$host", "$usuario", "$senha", "$banco");

 	if ($conexao->connect_error) {
 		echo "EITA, DEU RUIM NA CONEXÃO";
 	}
 	// else{
 	// 	echo "ARRASOU NA CONEXÃO";
 	// }

 	?>