<?php require_once("header.php"); ?>

	<div class="container">
		<div class="row">
			<div class="col-3">
				<a href="app.php"><i class="fas fa-chevron-left text-primary"></i> Sair</a>
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
				<h4>Bem-vindo ao Turistando</h4>
				<h6>Guias turísticos, passeios, restaurantes</h6>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<form action="sign_up2.php" method="post">
					<h5>Conte-nos mais sobre você!</h5>

					<div class="form-group">
						<label>Digite seu nome:</label>
						<input type="text" placeholder="Seu nome" class="form-control">
					</div>
					<div class="form-group">
						<label>Digite seu sobrenome:</label>
						<input type="text" placeholder="Seu sobrenome" class="form-control">
					</div>

					<div class="form-group">
						<label>Sou:</label>

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
						<button type="submit" class="btn btn-success d-block" style="width: 100%;"><i class="fas fa-arrow-right"></i> CONTINUAR</button>
					</div>
				</form>
			</div>
		</div>



	</div>
<?php require_once("footer.php"); ?>