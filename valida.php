<?php
include_once ("conecta.php");
include_once ("header.php");

$login = $_POST['email'];
$senha = $_POST['senha'];
$usuario = array();

$sql = "SELECT * FROM cadastro WHERE email =  '$login' AND senha = '$senha' ";
/*$busca = mysqli_query($conexao,$sql); */

$busca = $conexao->query($sql);

while ($row = $busca->fetch_array()) {
    $usuario = $row;
}

if (!empty($usuario)) {
    $_SESSION['login'] = $login;
    echo"<script type='text/javascript'> location.href='logadosucesso.php'; </script>";
} else {
    unset($_SESSION['login']);
}



mysqli_close($conexao);

?>
