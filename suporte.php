<?php require_once("header.php"); ?>

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
				<h4>Histórico de suporte</h4>
			</div>
		</div>

		<div class="row support_list">
			
			<table class="table">
				<tr>
					<th>25/08/2018</th><th>20:52h</th>
				</tr>
				<tr>
					<td><strong>Serviço:</strong> Bug</td><td></td>
				</tr>
				<tr>
					<td><strong>Status: </strong> Resolvido</td><td><span class="detalhes"><i class="fas fa-plus-circle"></i> mais detalhes</span></td>
				</tr>
			</table>

			<table class="table">
				<tr>
					<th>04/02/2014</th><th>10:36h</th>
				</tr>

				<tr>
					<td><strong>Serviço:</strong> Sugestão</td><td></td>
				</tr>
				<tr>
					<td><strong>Status: </strong> Cancelado</td><td><span class="detalhes"><i class="fas fa-plus-circle"></i> mais detalhes</span></td>
				</tr>
			</table>
			
		</div>

		<div class="row support_single" style="display: none;">
			
			<table class="table">
				<tr>
					<th>25/08/2018</th><th>20:52h</th>
				</tr>
				<tr>
					<td><strong>Serviço:</strong> Bug</td><td></td>
				</tr>
				<tr>
					<td><strong>Status: </strong> Resolvido</td><td></td>
				</tr>
			</table>

			<div class="col">
				<h6>Descrição</h6>

				<div class="chat_left">
					<p>20:52h</p>
					<p>Não consigo contactar o guia</p>
				</div>

				<div class="chat_right">
					<p>20:54h</p>
					<p>Teste agora por favor.</p>
				</div>

				<div class="chat_left">
					<p>20:55h</p>
					<p>Agora está ok.</p>
				</div>
				
				<button type="button" class="btn btn-warning d-block" style="width: 100%;" onclick="$('.support_single').hide(); $('.support_list').fadeIn();"><i class="fas fa-arrow-left"></i> VOLTAR</button>
			</div>

			
		</div>

	</div>
<?php require_once("footer.php"); ?>