<!-- Implementação dos planos-->
<section class="container body-main">
		<div class="text-center my-5">
			<span class="h6 d-block">SEU PLANO, SUA VIAGEM</span>
			<h1 class="display-4 text-primary">Escolha o Plano</h1>
		</div>	

		<div class="row">
			<div class="col-md mb-5">
				<div class="bg-light rounded p-4 box-shadow">
					<h2>Gold</h2>
					<ul class="lista-plano list-unstyled">
						<li>
							<span data-toggle="tooltip" data-placement="right" title="Isso mesmo, são 30 dias totais durante a viagem.">→ 30 dias de viagem</span>
						</li>
						<li>→ 3 destinos diferentes</li>
						<li>→ Tudo pago pela empresa</li>
						<li>→ Ingressos pra festas</li>
					</ul>
					<form action="<?= base_url('planos/adiciona_carrinho_gold'); ?>" method="post">
						<div class="form-group">
							<select class="form-control bg-light" id="inputCidadesGold" name="inputCidades">
								<option value="">Selecione a Cidade</option>
								<?php foreach($locais as $local) { ?>
									<option value="<?= $local->IDLocal ?>"><?= $local->nomeCity ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="row align-items-center mt-4">
							<div class="col">
								<button type="submit" class="btn btn-primary btn-lg d-block" id="confirmSubmitGold" disabled>Comprar Plano</button>
							</div>

							<div class="col">
								<span class="h4" id="precoLocalGold" data-type="Preco" ></span>
								<input type="hidden" id="localGold" name="precoLocal" >
								<input type="hidden" name="tipoPlano" value="Gold" >
								<input type="hidden" id="nomeCidadeGold" name="nomeCidade">
							</div>
						</div>
					</form>
				</div>
			</div>


			<div class="col-md mb-5">
				<div class="bg-light rounded p-4 box-shadow">
					<h2>Platinum <span class="badge badge-success">Novo</span></h2>			
					<ul class="lista-plano list-unstyled">
						<li>→ 60 dias de viagem</li>
						<li>→ 6 destinos diferentes</li>
						<li>→ Tudo pago pela empresa</li>
						<li>→ Ingressos pra festas</li>
					</ul>
					<form action="<?= base_url('planos/adiciona_carrinho_platinum'); ?>" method="post">
						<div class="form-group">
							<select class="form-control bg-light" id="inputCidadesPlantinum" name="inputCidades">
								<option value="">Selecione a Cidade</option>
								<?php foreach($locais as $local) { ?>
									<option value="<?= $local->IDLocal ?>"><?= $local->nomeCity ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="row align-items-center mt-4">
							<div class="col">
								<button type="submit" class="btn btn-primary btn-lg d-block" id="confirmSubmitPlatinum" disabled>Comprar Plano</button>
							</div>

							<div class="col">
								<span class="h4" id="precoLocalPlantinum" data-type="Preco" ></span>
								<input type="hidden" id="localPlantinum" name="precoLocal" >
								<input type="hidden" name="tipoPlano" value="Platinum" >
								<input type="hidden" id="nomeCidadePlatinum" name="nomeCidade">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>	
	</section>