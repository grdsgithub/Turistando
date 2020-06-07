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
				<i class="fas fa-bars menu float-right"></i>
			</div>
		</div>
	</div>

<?php
	if($_SESSION["user_type"] == "Turista"):
?>
	<div class="container pessoas">
		<div class="row">
			<div class="col-1" style="padding-right: 0; padding-top: 5px;">
				<a href="busca_cidade.php"><i class="fas fa-search"></i></a>
			</div>
			<div class="col-11">
				<input type="text" name="" placeholder="Procurar guias em qual cidade?" class="form-control">
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<a href="mapa.php" id="encontrar_no_mapa" class="btn btn-success d-block" style="width: 100%;">Encontrar no mapa<a/>
			</div>
		</div>

		<div class="row">
			<div class="col-4">
				<a href="user.php"><img src="images/user1.jpg" width="100%"></a>
			</div>
			<div class="col">				
				<h5>Marcos</h5>
				<p><strong>Cidade: </strong>Ouro Preto/MG</p>
				<p><strong>Nota: </strong>9.7/10 <i class="fas fa-star"></i></p>
			</div>
		</div>

		<div class="row">
			<div class="col-4">
				<a href="user.php"><img src="images/user2.jpg" width="100%"></a>
			</div>
			<div class="col">
				<h5>João</h5>
				<p><strong>Cidade: </strong>Belo Horizonte/MG</p>
				<p><strong>Nota: </strong>8.5/10</p>
			</div>
		</div>

		<div class="row">
			<div class="col-4">
				<a href="user.php"><img src="images/user3.jpg" width="100%"></a>
			</div>
			<div class="col">
				<h5>Ana</h5>
				<p><strong>Cidade: </strong>Mariana/MG</p>
				<p><strong>Nota: </strong>8.9/10</p>
			</div>
		</div>

		<div class="row">
			<div class="col-4">
				<a href="user.php"><img src="images/user4.jpg" width="100%"></a>
			</div>
			<div class="col">
				<h5>Juliana</h5>
				<p><strong>Cidade: </strong>Campinas/SP</p>
				<p><strong>Nota: </strong>9.1/10 <i class="fas fa-star"></i></p>
			</div>
		</div>

		<div class="row">
			<div class="col-4">
				<a href="user.php"><img src="images/user5.jpg" width="100%"></a>
			</div>
			<div class="col">
				<h5>Luana</h5>
				<p><strong>Cidade: </strong>Guarulhos/SP</p>
				<p><strong>Nota: </strong>8.2/10</p>
			</div>
		</div>

		<div class="row">
			<div class="col-4">
				<a href="user.php"><img src="images/user6.jpg" width="100%"></a>
			</div>
			<div class="col">
				<h5>Henrique</h5>
				<p><strong>Cidade: </strong>Rio de Janeiro/RJ</p>
				<p><strong>Nota: </strong>6.8/10</p>
			</div>
		</div>
	</div>
<?php
	elseif($_SESSION["user_type"] == "Guia"):
?>
	<div class="container pessoas">
		<div class="row">
			<div class="col">
				<h4>Meus turistas (2)</h4>
			</div>
		</div>

		<div class="row">
			<div class="col-4">
				<a href="user.php"><img src="images/user3.jpg" width="100%"></a>
			</div>
			<div class="col">				
				<h5>Ana <a href="chat.php" class="float-right"><i class="fas fa-comments"></i></a></h5>
				<p><strong>Data: </strong>20/08/2019 a 25/08/2019</p>
				<p><strong>Horário: </strong> dia todo</p>
			</div>
		</div>

		<div class="row">
			<div class="col-4">
				<a href="user.php"><img src="images/user4.jpg" width="100%"></a>
			</div>
			<div class="col">
				<h5>Juliana <a href="chat.php" class="float-right"><i class="fas fa-comments"></i></a></h5>
				<p><strong>Data: </strong>17/06/2019 a 22/06/2019</p>
				<p><strong>Horário: </strong> 18h às 20h</p>
			</div>
		</div>

	</div>
<?php
	endif;
?>
<?php require_once("footer.php"); ?>