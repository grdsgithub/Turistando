<?php
	require_once("header.php");

	if(empty($_SESSION["user_type"]))
	{
		$_SESSION["user_type"] = $_POST["user_type"];
	}
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

<?php
	if($_SESSION["user_type"] == "Guia"):
?>
	<div class="container">
		<div class="row">
			<div class="col">
				<h4>Roteiros</h4>

				<button type="button" class="btn btn-success d-block" style="width: 100%;"><i class="fas fa-plus-circle"></i> ADICIONAR NOVO</button>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<h5>Roteiro 1 - Gastronômico</h5>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<div class="form-group">
					<a href="roteiro_edit.php" class="btn btn-warning d-inline-block float-left" style="width: 48%;"><i class="fas fa-edit"></i> EDITAR</a>
					<button type="submit" class="btn btn-danger d-inline-block float-right" style="width: 48%;"><i class="fas fa-trash-alt"></i> EXCLUIR</button>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<h5>Roteiro 2 - História local</h5>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<div class="form-group">
					<a href="roteiro_edit.php" class="btn btn-warning d-inline-block float-left" style="width: 48%;"><i class="fas fa-edit"></i> EDITAR</a>
					<button type="submit" class="btn btn-danger d-inline-block float-right" style="width: 48%;"><i class="fas fa-trash-alt"></i> EXCLUIR</button>
				</div>
			</div>
		</div>

	</div>
<?php
	endif;
?>
<?php require_once("footer.php"); ?>