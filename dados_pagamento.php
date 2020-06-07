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
	if($_SESSION["user_type"] == "Turista"):
?>
	<div class="container">
		<div class="row">
			<div class="col">
				<h4>Dados pagamento</h4>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<h5>Cartão 1</h5>
				<p><strong>Bandeira: </strong>Mastercard</p>
				<p><strong>Nº do cartão: </strong> XXXX XXXX XXXX 6538</p>
				<p><strong>Nome no cartão: </strong> João Alves da Silva</p>
				<p><strong>Validade: </strong> 08/2026</p>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<div class="form-group">
					<button type="button" class="btn btn-warning d-inline-block float-left" style="width: 48%;"><i class="fas fa-edit"></i> EDITAR</button>
					<button type="submit" class="btn btn-danger d-inline-block float-right" style="width: 48%;"><i class="fas fa-trash-alt"></i> EXCLUIR</button>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<h5>Cartão 2</h5>
				<p><strong>Bandeira: </strong>Visa</p>
				<p><strong>Nº do cartão: </strong> XXXX XXXX XXXX 7844</p>
				<p><strong>Nome no cartão: </strong> Maria Gomes da Silva</p>
				<p><strong>Validade: </strong> 07/2022</p>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<div class="form-group">
					<button type="button" class="btn btn-warning d-inline-block float-left" style="width: 48%;"><i class="fas fa-edit"></i> EDITAR</button>
					<button type="submit" class="btn btn-danger d-inline-block float-right" style="width: 48%;"><i class="fas fa-trash-alt"></i> EXCLUIR</button>
				</div>
			</div>
		</div>

		<button type="button" class="btn btn-success d-block" style="width: 100%;"><i class="fas fa-plus-circle"></i> ADICIONAR NOVO</button>

	</div>
<?php
	elseif($_SESSION["user_type"] == "Guia"):
?>
	<div class="container pessoas">
		<div class="row">
			<div class="col">
				<h4>Dados pagamento</h4>
			</div>
		</div>

		<div class="row">
			<div class="col-4">
				<h5>Conta 1</h5>
			</div>
			<div class="col">
				<p><strong>Banco: </strong>Itaú</p>
				<p><strong>Agência: </strong> 6538-1</p>
				<p><strong>Conta Corrente: </strong> 15358-9</p>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<div class="form-group">
					<button type="button" class="btn btn-warning d-inline-block float-left" style="width: 48%;"><i class="fas fa-edit"></i> EDITAR</button>
					<button type="submit" class="btn btn-danger d-inline-block float-right" style="width: 48%;"><i class="fas fa-trash-alt"></i> EXCLUIR</button>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-4">
				<h5>Conta 2</h5>
			</div>
			<div class="col">
				<p><strong>Banco: </strong>Bradesco</p>
				<p><strong>Agência: </strong> 5643-1</p>
				<p><strong>Conta Poupança: </strong> 54139-2</p>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<div class="form-group">
					<button type="button" class="btn btn-warning d-inline-block float-left" style="width: 48%;"><i class="fas fa-edit"></i> EDITAR</button>
					<button type="submit" class="btn btn-danger d-inline-block float-right" style="width: 48%;"><i class="fas fa-trash-alt"></i> EXCLUIR</button>
				</div>
			</div>
		</div>

		<button type="button" class="btn btn-success d-block" style="width: 100%;"><i class="fas fa-plus-circle"></i> ADICIONAR NOVO</button>

	</div>
<?php
	endif;
?>
<?php require_once("footer.php"); ?>