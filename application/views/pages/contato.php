	<!-- Implementação dos campos de Contato -->

	<section class="container body-main">
		<div class="my-5 text-center">
			<span class="h6 d-block">POSSUI ALGUMA DÚVIDA?</span>
			<h2 class="display-4 text-primary">Fale Conosco</h2>
		</div>

		<div class="row">
			<div class="col-lg mb-5">
				<form class="bg-light rounded p-4 box-shadow">
					<div class="form-group">
						<label for="clienteNome">Nome</label>
						<input type="text" class="form-control" id="clienteNome">
					</div>
					<div class="form-group">
						<label for="clienteEmail">E-mail</label>
						<input type="email" class="form-control" id="clienteEmail">
					</div>

					<div class="form-group">
						<label for="clienteMensagem">Mensagem</label>
						<textarea class="form-control" id="clienteMensagem" rows="4"></textarea>						
					</div>
					
					<button type="submit" class="btn btn-primary">Enviar Mensagem</button>
				</form>
			</div>


			<div class="col-lg">
				<h2 class="h6">NOSSO ENDEREÇO</h2>
				<a href="#">
					<img class="img-fluid box-shadow rounded mb-4" src="<?= base_url(); ?>assets/img/mapa.png" alt="Endereço da empresa">
				</a>

				<h2 class="h6">Dados de Contato</h2>
				<ul class="list-unstyled text-secundary">
					<li>caravan@caravan.com.br</li>
					<li>21 99999-9999</li>
					<li>De Seg. à Sex. das 8H às 18H</li>
				</ul>
				
				<h2 class="h6">REDE SOCIAIS</h2>
				<ul class="list-unstyled" style="max-width: 260px;">
					<li>
						<a class="btn btn-outline-secondary btn-block btn-sm mb-2" href="#">Facebook</a>
					</li>	
					<li>
						<a class="btn btn-outline-secondary btn-block btn-sm mb-2" href="#">Twitter</a>
					</li>	
					<li>
						<a class="btn btn-outline-secondary btn-block btn-sm mb-2" href="#">Youtube</a>
					</li>
				</ul>

			</div>
		</div>
	</section>

	<!-- Implementação de perguntas frequentes -->
	<section>
		<div class="container">
			<div class="my-5 text-center">
				<span class="h6 d-block">AINDA ESTÁ COM DÚVIDAS?</span>
				<h2 class="display-4 text-primary">Perguntas Frequentes</h2>
			</div>

			<div class="row justify-content-center">
				<div class="col-xl-6 col-md-8" id="perguntasFrequentes" data-children=".pergunta">

					<div class="pergunta py-2">
						<a class="lead" data-toggle="collapse" data-parent="#perguntasFrequentes" href="#pergunta1" aria-expanded="true" aria-controls="pergunta1">
							→É possível cancelar a viagem?
						</a>
						<div id="pergunta1" class="collapse show" role="tabpanel" >
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in rhoncus enim. Sed tempor ligula vitae velit sollicitudin eleifend. Aliquam arcu nibh, pharetra eu lacus ac, gravida pulvinar justo.
							</p>
						</div>
					</div>

					<div class="dropdown-divider"></div>

					<div class="pergunta py-2">
						<a class="lead" data-toggle="collapse" data-parent="#perguntasFrequentes" href="#pergunta2" aria-expanded="true" aria-controls="pergunta2">
							→Qual a garantia que tenho se perder o voo?
						</a>
						<div id="pergunta2" class="collapse" role="tabpanel" >
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in rhoncus enim. Sed tempor ligula vitae velit sollicitudin eleifend. Aliquam arcu nibh, pharetra eu lacus ac, gravida pulvinar justo.
							</p>
						</div>
					</div>

					<div class="dropdown-divider"></div>

					<div class="pergunta py-2">
						<a class="lead" data-toggle="collapse" data-parent="#perguntasFrequentes" href="#pergunta3" aria-expanded="true" aria-controls="pergunta3">
							→Qual a principal forma de viagem?
						</a>
						<div id="pergunta3" class="collapse" role="tabpanel" >
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in rhoncus enim. Sed tempor ligula vitae velit sollicitudin eleifend. Aliquam arcu nibh, pharetra eu lacus ac, gravida pulvinar justo.
							</p>
						</div>
					</div>

					<div class="dropdown-divider"></div>

					<div class="pergunta py-2">
						<a class="lead" data-toggle="collapse" data-parent="#perguntasFrequentes" href="#pergunta4" aria-expanded="true" aria-controls="pergunta4">
							→Qual o melhor destino de viagem?
						</a>
						<div id="pergunta4" class="collapse" role="tabpanel" >
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in rhoncus enim. Sed tempor ligula vitae velit sollicitudin eleifend. Aliquam arcu nibh, pharetra eu lacus ac, gravida pulvinar justo.
							</p>
						</div>
					</div>

					<div class="dropdown-divider"></div>

					<div class="pergunta py-2">
						<a class="lead" data-toggle="collapse" data-parent="#perguntasFrequentes" href="#pergunta5" aria-expanded="true" aria-controls="pergunta5">
							→Vocês dão descontos para grupos grandes?
						</a>
						<div id="pergunta5" class="collapse" role="tabpanel" >
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in rhoncus enim. Sed tempor ligula vitae velit sollicitudin eleifend. Aliquam arcu nibh, pharetra eu lacus ac, gravida pulvinar justo.
							</p>
						</div>
					</div>

					<div class="dropdown-divider"></div>

				</div>
			</div>
		</div>

	</section>