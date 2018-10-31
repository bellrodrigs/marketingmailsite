<?php require_once ("header.php"); ?>
<link rel="stylesheet" type="text/css" href="css/index.css">


<div class="jumbotron img-responsive jumbotron-costum">
	<div class="container container-custom">
		<h1 class="titulotexto" style="color: white;"><spam style="color: #e0234a;">M</spam>arketing <spam style="color: #e0234a;">M</spam>ail</h1>
		<p class="corpotexto">Marketing Mail é uma ferramenta que irá permitir que você faça envio de e-mails com layouts predefinidos a sua cartilha de clientes, que poderá ser atualizada ou visualizada a qualquer momento. O Marketing Mail também disponibiliza a geração de relatórios de contatos, alteração, exclusão e também a opção de enviar para um grupo especifico, o qual o próprio usuário irá definir. Ele conta também com a programação de envio de e-mails, ferramenta essencial para quem precisa economizar tempo.

		Não perca tempo e faça o download gratuito do software e também se cadastre para receber tutoriais em vídeos e notificações de atualização em primeira mão.</p>
		<?php
				error_reporting(0);
				 if (!is_null($_SESSION['login'])) { ?>
					<p><a href="#" class="btn btn-primary btn-lg" id="btn-custom" href="#" role="button">Download</a></p>

				<?php } else { ?>
					<p><a class="btn btn-primary btn-lg" id="btn-custom" href="formulariologin.php" role="button">Download</a></p>
				<?php } ?>

	</div>
</div>


<?php require_once("footer.php"); ?>
