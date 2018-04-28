	<!-- Links com JavaScript -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-3.2.1.slim.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/libs/jQueryMask.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/libs/jQueryMaskMoney.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/popper.min.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/app.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>assets/js/userInteraction.js"></script>
    
    <!-- Implementação do footer -->
	<footer class="bg-dark text-white mt-5">

		<div class="container py-4">
			<div class="row">
				<div class="col-md-3 col-6">
					<h4 class="h6">PÁGINAS</h4>
					<ul class="list-unstyled">
						<li><a href="views/planos.html">Planos</a></li>
						<li><a href="views/contato.html">Contato</a></li>
						<li><a href="views/inscricao.html">Inscricao</a></li>
					</ul>
				</div>

				<div class="col-md-3 col-6">
					<h4 class="h6">LOCAIS</h4>
					<ul class="list-unstyled">
						<li><a href="views/local.html">California</a></li>
						<li><a href="views/local.html">Paris</a></li>
						<li><a href="views/local.html">Dublin</a></li>
					</ul>
				</div>


				<div class="col-md-4 col-6">
					<h4 class="h6">DADOS DE CONTATO</h4>
					<ul class="list-unstyled text-secundary">
						<li>caravan@caravan.com.br</li>
						<li>21 99999-9999</li>
						<li>De Seg. à Sex. das 8H às 18H</li>
					</ul>
				</div>

				<div class="col-md-2 col-6">
					<h4 class="h6">REDE SOCIAIS</h4>
					<ul class="list-unstyled">
						<li>
							<a class="btn btn-outline-secondary btn-block btn-sm btn-max-size mb-2" href="#">Facebook</a>
						</li>	
						<li>
							<a class="btn btn-outline-secondary btn-block btn-sm btn-max-size mb-2" href="#">Twitter</a>
						</li>	
						<li>
							<a class="btn btn-outline-secondary btn-block btn-sm btn-max-size mb-2" href="#">Youtube</a>
						</li>
					</ul>
				</div>

			</div>			
		</div>

		<div class="bg-primary text-center py-3">
			<p class="mb-0">Caravan © 2017. Alguns direitos reservados.</p>
		</div>
	</footer>

	<!-- Implementação do Modal -->
	<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginTitulo" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalLoginTitulo">Entre na sua conta</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?= base_url('cliente/acessar'); ?>" method="post">
						<div class="form-group">
							<label for="loginEmail">Email</label>
							<input type="email" class="form-control" id="loginEmail">
						</div>
						<div class="form-group">
							<label for="loginSenha">Password</label>
							<input type="password" class="form-control" id="loginSenha">
						</div>
						
						<button type="submit" class="btn btn-primary">Entrar na conta</button>
						<small class="form-text text-muted">Esqueceu a senha? <a href="#">Clique aqui</a>.</small>
					</form>
				</div>				
			</div>
		</div>
	</div>
	<!-- Finalização do Modal -->
</body>
</html>