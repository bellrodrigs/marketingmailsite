<!DOCTYPE html>
<html>
<head>
	<title>Marketing Mail</title>
	<meta charset="utf-8">
	<link rel="icon" href="imagem/logo.png">
	<link href="css/bootstrap.css" rel="stylesheet">
	<!-- ACRESCENTA SUB-MENU NA TELA RESPONSIVA -->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="css/estilo.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
	<script src="js/mm.js" type="text/javascript"></script>
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


  	<script src="js/imagerJs.js"></script>
  <link href="js/imagerJs.css" rel="stylesheet">

  <style>
    .imager-edit-container .toolbar {
      position: absolute;
    }

    #imagers {
      display: flex;
      align-items: flex-start;
      flex-wrap: wrap;
    }

    .imager-test {
      display: inline-block;
      margin-top: 0px;
      margin-bottom: 100px;
    }

    .imager-test.custom-quality-visible {
      margin-bottom: 200px;
    }

    .image-container {
      min-width: 300px;
      margin-right: 30px;
      text-align: left;
      margin-top: 20px;
    }
  </style>
</head>
<body>
	<div class="header">
	<nav class="navbar navbar-inverse navbar-custom">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<!-- LOGO DO MENU -->
				<a href="index.php"><img class="img-responsive" alt="logo" id="brand-image" src="imagem/logo3.png"></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">

				<?php
				$cookie_name = 'email';

				error_reporting(0);
				 if (!is_null($_COOKIE[$cookie_name])) { ?>

					<form method="POST" action="logout.php">
						<p style="color: white; display: inline-block; margin-right: 5px; margin-top: 6px;"><?php echo $_COOKIE[$cookie_name]; ?></p>
					<button class="btn btn-default navbar-btn" id="btn-deslogar" type="submit">Logout</button>
					</form>
				<?php } else { ?>
					<a href="edicao.php"><button type="button" class="btn btn-default navbar-btn" id="btn-cadastro" class="btn-cadastro-responsive">Edição de fotos</button></a>
					<a href="formulariocadastro.php"><button type="button" class="btn btn-default navbar-btn" id="btn-cadastro" class="btn-cadastro-responsive">Cadastre-se</button></a>
					<!--<a href="formulariologin.php"><button type="button" class="btn btn-default navbar-btn" id="btn-logar">Login</button></a>-->

				<?php } ?>

				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
</div>
