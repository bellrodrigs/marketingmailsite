<?php session_start(); ?>
<?php require_once ("header.php"); ?>
<link href="css/formulariologin.css" rel="stylesheet">

<form action="valida.php" method="post">
	<div class="container container-login-custom">
		<form class="form-signin">
			<h2>Login</h2>
			<h4>E-mail</h4>
			<label for="inputEmail" class="sr-only">E-mail</label>
			<input id="email" type="email" id="inputEmail" class="form-control" placeholder="Exemple@exemple.com" required="" name="email" autofocus="">
			<h4>Senha</h4>
			<label for="inputPassword" class="sr-only">Password</label>
			<input id="senha" type="password" id="inputPassword" class="form-control" placeholder="Senha" required="" name="senha">
			<div class="checkbox">
				<label><input id="lembrar" type="checkbox" value="remember-me">Lembre-me</label>
			</div>
			<button class="btn btn-lg btn-primary" id="btn-login" type="submit">Login</button>
		</form>
	</form>
</div>
<?php require_once("footer.php"); ?>