<?php require_once("header.php"); ?>

	<div class="container">
		<div class="row">
			<div class="col-3">
				<a href="main.php"><i class="fas fa-chevron-left text-primary"></i> Voltar</a>
			</div>
			<div class="col">
				<h6 class="text-center">Turistando</h6>
			</div>
			<div class="col-3">
				<i class="fas fa-bars menu float-right"></i>
			</div>
		</div>
	</div>

	<div class="container pessoas">
		<div class="row">
			<!-- <div class="col-1"></div> -->
			<div class="col">
				<img src="images/user1.jpg" width="100%">			
			</div>
			<!-- <div class="col-1"></div> -->
		</div>
		<div class="row">
			<div class="col">				
				<h5>Marcos</h5>
				<p><strong>Cidade: </strong>Ouro Preto/MG</p>
				<p><strong>Nota: </strong>9.7/10 <i class="fas fa-star"></i></p>
				<p><strong>Valor cobrado: </strong>R$ 30,00 / dia</p>
				<p><strong>Horário de atendimento: </strong>8 às 23h</p>
				<p><strong>Possui carro próprio: </strong>Sim</p>
				<p><strong>Telefone: </strong>+55 (31) 999 999 999</p>
				<p><strong>Turistas atendidos: </strong>43</p>

				<div class="form-group">
					<a href="roteiro_view.php" class="btn btn-success d-block" style="width: 100%;"><i class="fas fa-arrow-right"></i> ROTEIROS</a>
				</div>
			</div>
		</div>
	</div>
<?php require_once("footer.php"); ?>