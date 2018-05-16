<?php require_once ("header.php"); ?>
<link href="css/formulariologin.css" rel="stylesheet">

<!-- Nome / E-mail / Senha / Telefone / Celular -->

<form action="#" method="post">
	<div class="container container-login-custom">
		<form class="form-signin">
			<h2>Cadastro</h2>
			<h4>Nome</h4>
			<input type="text" class="form-control" placeholder="João da Silva" autofocus="" name="nome">
			<h4>E-mail</h4>
			<input type="email" id="inputPassword" class="form-control" placeholder="Exemple@exemple.com" name="email">
			<h4>Senha</h4>
			<!-- colocar força da senha -->
			<input type="password" class="form-control" name="senha">
			<h4>Confirme a senha</h4>
			<input type="password" class="form-control" name="confirmasenha">
			<h4>Telefone</h4>
			<input type="text" class="form-control" placeholder="2100000000" name="telefone">
			<h4>Celular</h4>
			<input type="text" class="form-control" placeholder="21900000000" name="celular"><br>
			<button class="btn btn-lg btn-primary btn-block" id="btn-login" type="submit">Cadastrar</button>
		</form>
	</form>
</div>

<?php require_once("footer.php"); ?>