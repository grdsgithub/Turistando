<div class="menu_user">
	<div class="container pessoa">
		<div class="row">
			<div class="col-2"></div>
			<div class="col">
				<?php
					if($_SESSION["user_type"] == "Turista")
					{
						$nome = "Bill Gates";
						echo '<img src="/images/billgates.jpg" width="100%">';
					}
					elseif($_SESSION["user_type"] == "Guia")
					{
						$nome = "João";
						echo '<img src="/images/user2.jpg" width="100%">';
					}
				?>
				
			</div>
			<div class="col-2"></div>
		</div>
		<div class="row">
			<div class="col">				
				<h5 class="text-center">Olá, <?=$nome;?></h5>
				<h6 class="text-center"><?=$_SESSION["user_type"];?></h6>
				<a href="dados_usuario.php"><button type="button" class="btn btn-secondary  d-block" style="width: 100%; margin-top: 10px;"><i class="fas fa-user-cog"></i> DADOS DO USUÁRIO</button></a>
				<a href="dados_pagamento.php"><button type="button" class="btn btn-secondary  d-block" style="width: 100%; margin-top: 10px;"><i class="fas fa-credit-card"></i> DADOS DE PAGAMENTO</button></a>
				<a href="historico.php"><button type="button" class="btn btn-secondary  d-block" style="width: 100%; margin-top: 10px;"><i class="fas fa-list-ol"></i> HISTÓRICO DE SERVIÇOS</button></a>
				<a href="suporte.php"><button type="button" class="btn btn-secondary  d-block" style="width: 100%; margin-top: 10px;"><i class="fas fa-info-circle"></i> SUPORTE</button></a>
				<?php if($_SESSION["user_type"] == "Guia"): ?>
				<a href="roteiros.php"><button type="button" class="btn btn-success  d-block" style="width: 100%; margin-top: 10px;"><i class="fas fa-info-circle"></i> ROTEIROS</button></a>
				<?php endif;?>
				<a href="interesses.php"><button type="button" class="btn btn-warning  d-block" style="width: 100%; margin-top: 10px;"><i class="fas fa-info-circle"></i> INTERESSES</button></a>
				<a href="app.php"><button type="button" class="btn btn-danger  d-block" style="width: 100%; margin-top: 10px;"><i class="fas fa-door-open"></i> SAIR DA CONTA</button></a>
			</div>
		</div>
	</div>
</div>