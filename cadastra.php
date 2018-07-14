<?php include_once("conecta.php"); 



?>
 

<?php if ($_POST['nome']=='') {	
	setcookie('ERROR' , true,  time() + 3600,  '/');
	header("Location: formulariocadastro.php");
 }
else if ($_POST['email'] == '') {
	echo "O e-mail precisa ser preenchido";
	}
else if ($_POST['senha'] == '') {
	echo "A senha precisa ser preenchido";
	}
	else if ($_POST['confirmasenha'] != $_POST['senha']) {
		echo "As senhas não são compativeis";
	}

	else {

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];

$sql = "INSERT INTO cadastro (nome,email,senha,telefone,celular) VALUES ('$nome','$email','$senha','$telefone','$celular')";
$salvar = mysqli_query($conexao,$sql); 	
echo'<script type="text/javascript"> location.href="cadastrosucesso.php"; </script>';
/*header('Location: cadastrosucesso.php');*/

//$response = array("success" => true);
//echo json_encode($response);



mysqli_close($conexao);



}

 ?> 