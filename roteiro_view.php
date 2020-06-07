<?php
	require_once("header.php");
?>

	<div class="container">
		<div class="row">
			<div class="col-3">
				<a href="main.php"><i class="fas fa-chevron-left text-primary"></i> Início</a>
			</div>
			<div class="col">
				<h6 class="text-center">Turistando</h6>
			</div>
			<div class="col-3">
				<i class="fas fa-bars menu float-right"></i>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col">
				<h4>Roteiros</h4>
				<h5>Roteiro 1 - Gastronômico</h5>

				<div class="form-group">
					
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="Português" id="Portugues" checked>
						<label class="form-check-label" for="Portugues">
							Bares e restaurantes
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="Inglês" id="Ingles" checked>
						<label class="form-check-label" for="Ingles">
							Gastronomia
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="Espanhol" id="Espanhol">
						<label class="form-check-label" for="Espanhol">
							Shows, cinemas e teatros
						</label>
					</div>

					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="Espanhol" id="Espanhol">
						<label class="form-check-label" for="Espanhol">
							História local
						</label>
					</div>

					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="Espanhol" id="Espanhol">
						<label class="form-check-label" for="Espanhol">
							Recreação e lazer
						</label>
					</div>
				</div>


				<div class="form-group">
					<label>Descrição:</label>
					<textarea type="text" placeholder="Descrição do roteiro" class="form-control">Visitar vários bares e restaurantes conhecidos no centro da cidade</textarea>
				</div>

				<div class="form-group">
					<label>Duração média em horas:</label>
					<input placeholder="03:00h" class="form-control">
				</div>

				<div class="form-group">
					<button type="button" class="btn btn-success d-block" style="width: 100%;"><i class="fas fa-save"></i> SALVAR</button>
				</div>
			</div>
		</div>

	</div>
<?php require_once("footer.php"); ?>