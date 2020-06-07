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

	<div class="container usuario">

		<div class="row">
			<div class="col">
				<i class="fas fa-camera fa-6x d-block text-center"></i>
				<h6 class="text-center">Alterar foto</h6>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<h5>Meus dados de usuário:</h5>

				<div class="form-group">
					<label>Nome:</label>
					<input type="text" placeholder="Seu nome" class="form-control" value="João">
				</div>
				<div class="form-group">
					<label>Sobrenome:</label>
					<input type="text" placeholder="Seu sobrenome" class="form-control" value="Alves">
				</div>

				<div class="form-group">
					<label>Estado:</label>
					<input type="text" placeholder="Estado" class="form-control" value="MG">
				</div>

				<div class="form-group">
					<label>Cidade:</label>
					<input type="text" placeholder="Cidade" class="form-control" value="Belo Horizonte">
				</div>

				<div class="form-group">
					<label>Telefone:</label>
					<input type="text" placeholder="Telefone" class="form-control" value="(31) 789 654 645">
				</div>
				<div class="form-group">
					<label>E-mail:</label>
					<input type="text" placeholder="E-mail" class="form-control" value="joao_alves@email.com">
				</div>

				<div class="form-group">
					<label>Senha:</label>
					<input type="text" placeholder="Senha" class="form-control">
				</div>
				<div class="form-group">
					<label>Confirme sua senha:</label>
					<input type="text" placeholder="Confirme sua senha" class="form-control">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-success d-block" style="width: 100%;"><i class="fas fa-save"></i> SALVAR</button>
				</div>
			</div>
		</div>



	</div>
<?php require_once("footer.php"); ?>