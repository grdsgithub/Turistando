<?php
	require_once("header.php");
	$user_type = $_POST["user_type"];
?>
	
	<div class="container">
		<div class="row">
			<div class="col-3">
				<a href="sign_up.php"><i class="fas fa-chevron-left text-primary"></i> Voltar</a>
			</div>
			<div class="col">
				<h6 class="text-center">Turistando</h6>
			</div>
			<div class="col-3">

			</div>
		</div>
	</div>

	<div class="container">

		<div class="row">
			<div class="col">
				<h4>Parabéns,</h4>
				<h6>agora você já faz parte da comunidade <strong>Turistando</strong>.</h6>

				<h6>Foi enviado um e-mail com instruções para confirmar seu cadastro.</h6>

				<i class="fas fa-check-circle fa-8x d-block text-center" style="color: #00e234; margin: 40px 0;"></i>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<h6>Clique abaixo para voltar à tela de login!</h6>

				<div class="form-group">
					<a href="app.php"><button type="button" class="btn btn-success d-block" style="width: 100%;"><i class="fas fa-home"></i> HOME</button></a>
				</div>				
			</div>
		</div>

	</div>
	
<?php require_once("footer.php"); ?>