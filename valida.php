<?php
include_once ("conecta.php");

$login = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM cadastro WHERE email =  '$login' AND senha = '$senha' ";
/*$busca = mysqli_query($conexao,$sql); */

$busca = $conexao->query($sql);

while ($row = $busca->fetch_array())  {
    $usuario = $row;
}

if (count($usuario)  > 0) {
setcookie('email' , $usuario['email'],  time() + 3600,  '/');
echo"<script type='text/javascript'> location.href='logadosucesso.php'; </script>";

}
 


mysqli_close($conexao);

?>