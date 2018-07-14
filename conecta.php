	<?php

$hostname = "localhost";
$user = "id6302249_admin";
$password = "123456";
$database = "id6302249_marketinmailsite";
$conexao = mysqli_connect($hostname,$user,$password,$database);

if(!$conexao) {
	print"Falha na conexão com Banco de dados";
}

?>