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
				<a href="sign_up.php"><i class="fas fa-chevron-left text-primary"></i> Voltar</a>
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
				<h4>Olá <?=$_SESSION["user_type"];?>,</h4>
				<h6>por favor complete seu cadastro.</h6>
			</div>
		</div>
	</div>
<?php
	if($_SESSION["user_type"] == "Turista"):
?>
	<div class="container">
		<div class="row">
			<div class="col">
				<form action="sign_up_ok.php">
					<div class="step1">
						<div class="form-group">
							<label>Sexo:</label>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="sexo" id="Masculino" value="Masculino" checked>
								<label class="form-check-label" for="Masculino">
									Masculino
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="sexo" id="Feminino" value="Feminino">
								<label class="form-check-label" for="Feminino">
									Feminino
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="sexo" id="Feminino" value="Feminino">
								<label class="form-check-label" for="Feminino">
									Outro
								</label>
							</div>
						</div>

						<div class="form-group">
							<label>Data de nascimento:</label>
							<input type="text" placeholder="Data de nascimento" class="form-control">
						</div>

						<h5>De onde você é?</h5>

						<div class="form-group">
							<label>Estado:</label>
							<input type="text" placeholder="Estado" class="form-control">
						</div>
						<div class="form-group">
							<label>Cidade:</label>
							<input type="text" placeholder="Cidade" class="form-control">
						</div>

						<div class="form-group">
							<button type="button" class="btn btn-success d-block" style="width: 100%;" onclick="$('.step1').hide();$('.step2').fadeIn();"><i class="fas fa-arrow-right"></i> CONTINUAR</button>
						</div>
					</div>

					<div class="step2" style="display: none;">
						<h5>Só mais um pouco...</h5>

						<div class="form-group">
							<label>Telefone:</label>
							<input type="text" placeholder="Telefone" class="form-control">
						</div>
						<div class="form-group">
							<label>E-mail:</label>
							<input type="text" placeholder="E-mail" class="form-control">
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
							<button type="button" class="btn btn-warning d-inline-block float-left" style="width: 48%;" onclick="$('.step2').hide();$('.step1').fadeIn();"><i class="fas fa-arrow-left"></i> VOLTAR</button>
							<button type="submit" class="btn btn-success d-inline-block float-right" style="width: 48%;"><i class="fas fa-check"></i> CONFIRMAR</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php
	elseif($_SESSION["user_type"] == "Guia"):
?>
	<div class="container guia">
		<div class="row">
			<div class="col">
				<form action="sign_up_ok.php">
					<div class="step1">
						<div class="form-group">
							<label>Sexo:</label>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="sexo" id="Masculino" value="Masculino" checked>
								<label class="form-check-label" for="Masculino">
									Masculino
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="sexo" id="Feminino" value="Feminino">
								<label class="form-check-label" for="Feminino">
									Feminino
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="sexo" id="Feminino" value="Feminino">
								<label class="form-check-label" for="Feminino">
									Outro
								</label>
							</div>
						</div>

						<div class="form-group">
							<label>Data de nascimento:</label>
							<input type="text" placeholder="Data de nascimento" class="form-control">
						</div>
						
						<h5>De onde você é?</h5>

						<div class="form-group">
							<label>Estado:</label>
							<input type="text" placeholder="Estado" class="form-control">
						</div>
						<div class="form-group">
							<label>Cidade:</label>
							<input type="text" placeholder="Cidade" class="form-control">
						</div>

						<div class="form-group">
							<label>CEP:</label>
							<input type="text" placeholder="CEP" class="form-control">
						</div>

						<div class="form-group">
							<label>Logradouro:</label>
							<input type="text" placeholder="Logradouro" class="form-control">
						</div>

						<div class="form-group">
							<label>Nº:</label>
							<input type="text" placeholder="Nº" class="form-control">
						</div>

						<div class="form-group">
							<label>Complemento:</label>
							<input type="text" placeholder="Complemento" class="form-control">
						</div>

						<div class="form-group">
							<label>Bairro:</label>
							<input type="text" placeholder="Bairro" class="form-control">
						</div>

						<div class="form-group">
							<button type="button" class="btn btn-success d-block" style="width: 100%;" onclick="$('.step1').hide(); $('.step2').fadeIn();"><i class="fas fa-arrow-right"></i> CONTINUAR</button>
						</div>
					</div>

					<div class="step2" style="display: none;">
						<h5>Identificação do guia</h5>

						<div class="form-group">
							<label>Carteira de identidade:</label>
							<input type="text" placeholder="Carteira de Identidade" class="form-control">
						</div>
						<div class="form-group">
							<label>Idiomas falados:</label>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="Português" id="Portugues">
								<label class="form-check-label" for="Portugues">
									Português
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="Inglês" id="Ingles">
								<label class="form-check-label" for="Ingles">
									Inglês
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="Espanhol" id="Espanhol">
								<label class="form-check-label" for="Espanhol">
									Espanhol
								</label>
							</div>
						</div>
							
						<div class="form-group">
							<label>Valor cobrado:</label>
							<input type="text" placeholder="Valor cobrado" class="form-control">
						</div>

						<div class="form-group">
							<label>Valor cobrado para grupos:</label>
							<input type="text" placeholder="Valor cobrado para grupos" class="form-control">
						</div>

						<div class="form-group">
							<label>Máximo de pessoas que atende:</label>
							<input type="text" placeholder="Máximo de pessoas que atende" class="form-control">
						</div>

						<div class="form-group">
							<label>Horário de atendimento:</label>
							
							<div class="float-left" style="width: 45%;">
								<input type="text" placeholder="0" class="form-control float-left">
							</div>
							<div class="float-left text-center" style="width: 10%;">
								às
							</div>
							<div class="float-left" style="width: 45%;">
								<input type="text" placeholder="23" class="form-control float-left">
							</div>
							<div class="clearfix"></div>
						</div>

						<div class="form-group">
							<label>Possui carro?</label>

							<div class="form-check">
								<input class="form-check-input" type="radio" name="car" id="Sim" value="Sim" checked>
								<label class="form-check-label" for="Sim">
									Sim
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="car" id="Nao" value="Não">
								<label class="form-check-label" for="Nao">
									Não
								</label>
							</div>
						</div>

						<div class="form-group">
							<button type="button" class="btn btn-warning d-inline-block float-left" style="width: 48%;" onclick="$('.step2').hide(); $('.step1').fadeIn();"><i class="fas fa-arrow-left"></i> VOLTAR</button>
							<button type="button" class="btn btn-success d-inline-block float-right" style="width: 48%;" onclick="$('.step2').hide(); $('.step3').fadeIn();"><i class="fas fa-arrow-right"></i> CONTINUAR</button>
						</div>
						
					</div>

					<div class="step3" style="display: none;">
						<div class="form-group">
							<label>Telefone:</label>
							<input type="text" placeholder="Telefone" class="form-control">
						</div>
						<div class="form-group">
							<label>E-mail:</label>
							<input type="text" placeholder="E-mail" class="form-control">
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
							<button type="button" class="btn btn-warning d-inline-block float-left" style="width: 48%;" onclick="$('.step3').hide(); $('.step2').fadeIn();"><i class="fas fa-arrow-left"></i> VOLTAR</button>
							<button type="submit" class="btn btn-success d-inline-block float-right" style="width: 48%;"><i class="fas fa-check"></i> CONFIRMAR</button>
						</div>
						<br clear="all">
					</div>
				</form>
			</div>
		</div>
	</div>
<?php
	endif;
?>
	</div>
	
<?php require_once("footer.php"); ?>