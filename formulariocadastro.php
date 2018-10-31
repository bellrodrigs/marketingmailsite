<?php require_once ("header.php"); ?>
<link href="css/formulariologin.css" rel="stylesheet">

<!-- Nome / E-mail / Senha / Telefone / Celular -->

<form  method="POST" action="cadastra.php">
	<div class="container container-login-custom">
		<form id="form" class="form-signin">
			<script>

				window.setInterval(function() {
					var login = document.getElementById('btn-login');
					login.setAttribute('disabled', 'disabled');
					var nome = document.getElementById('nome');
					var email = document.getElementById('email');
					var senha = document.getElementById('senha');
					var confirmasenha = document.getElementById('confirmasenha');
					var telefone = document.getElementById('telefone');
					var celular = document.getElementById('celular');

					if (nome.value != ""  && email.value != "" && senha.value == confirmasenha.value && telefone.value != "" && celular.value != "") {

						login.removeAttribute("disabled");

					}else {

						login.setAttribute('disabled', 'disabled')
					}
				}, 50);
			</script>
			<h2>Cadastre-se para receber mais informações e atualizações sobre o software</h2>
			<h4>Nome</h4>
			<input id="nome" type="text" class="form-control" placeholder="João da Silva" autofocus="" name="nome">
			<p id="erronome"></p>
			<h4>E-mail</h4>
			<input id="email" type="email" id="inputPassword" class="form-control" placeholder="Exemple@exemple.com" name="email">
			<p id="erroemail"></p>
			<h4>Senha</h4>
			<!-- colocar força da senha -->
			<input id="senha" type="password" class="form-control" name="senha">
			<p id="errosenha"></p>
			<h4>Confirme a senha</h4>
			<input id="confirmasenha" type="password" class="form-control" name="confirmasenha">
			<p id="erroconfirma"></p>
			<h4>Telefone</h4>
			<input id="telefone" type="text" class="form-control" placeholder="2100000000" name="telefone">
			<h4>Celular</h4>
			<input id="celular" type="text" class="form-control" placeholder="21900000000" name="celular"><br>
			<button class="btn btn-lg btn-primary" id="btn-login" type="submit">Cadastrar</button>
		</form>
	</div>
</form>

</div>

<?php require_once("footer.php"); ?>
