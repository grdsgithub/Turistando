<?php
	require_once("header.php");
	unset($_SESSION["user_type"]);
?>
	<h2 class="text-center">Turistando</h2>
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h3>Fazer login</h3>
				<i class="fas fa-user-circle fa-4x"></i>
			</div>
			<div class="col-12">
				<form action="main.php" method="post">
					<div class="form-group">
						<label>Usuário:</label>
						<input type="text" placeholder="Usuário" class="form-control">
					</div>
					<div class="form-group">
						<label>Senha:</label>
						<input type="text" placeholder="Senha" class="form-control">
					</div>

					<div class="form-group">
						<label>Entrar como:</label>

						<div class="form-check">
							<input class="form-check-input" type="radio" name="user_type" id="Turista" value="Turista" checked>
							<label class="form-check-label" for="Turista">
								Turista
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="user_type" id="Guia" value="Guia">
							<label class="form-check-label" for="Guia">
								Guia
							</label>
						</div>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary d-block" style="width: 100%;"><i class="fas fa-sign-in-alt"></i> ENTRAR</button>
						<a href="sign_up.php"><button type="button" class="btn btn-success  d-block" style="width: 100%; margin-top: 10px;"><i class="fas fa-user-plus"></i> CADASTRAR</button></a>
						<img src="images/entrar_facebook.jpg" style="width: 100%; margin-top: 10px;">
					</div>
				</form>
			</div>
		</div>
	</div>
<?php require_once("footer.php"); ?>