<?php require_once ("header.php"); ?>
<link href="css/formulariologin.css" rel="stylesheet">

<form action="#" method="post">
	<div class="container container-login-custom">
		<form class="form-signin">
			<h2>Login</h2>
			<h4>E-mail</h4>
			<label for="inputEmail" class="sr-only">E-mail</label>
			<input type="email" id="inputEmail" class="form-control" placeholder="Exemple@exemple.com" required="" autofocus="">
			<h4>Senha</h4>
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" id="inputPassword" class="form-control" placeholder="Senha" required="">
			<div class="checkbox">
				<label><input type="checkbox" value="remember-me">Lembre-me</label>
			</div>
			<button class="btn btn-lg btn-primary btn-block" id="btn-login" type="submit">Login	</button>
		</form>
	</form>
</div>
<?php require_once("footer.php"); ?>