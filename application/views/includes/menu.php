<!-- Implementação de Navbar responsivo -->
<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top py-3 box-shadow">
		<a href="<?= base_url(); ?>" class="navbar-brand"> 
			<img src="<?= base_url(); ?>/assets/img/caravan.svg" alt="Caravan">
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoMenu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="conteudoMenu">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle active" id="menuLocais"  role="button" data-toggle="dropdown" arial-haspopup="true" arial-expanded="false">Locais</a>

					<div class="dropdown-menu" aria-labelledby="menuLocais">
						<a class="dropdown-item" href="<?= base_url(); ?>local">California</a>
						<a class="dropdown-item" href="<?= base_url(); ?>local">Paris</a>
						<a class="dropdown-item" href="<?= base_url(); ?>local">Dublin</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url(); ?>planos">Planos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url(); ?>contato">Contato</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#" data-toggle="modal" data-target="#modalLogin">Login</a>
				</li>
				<li class="nav-item">
					<a class="btn btn-outline-primary ml-md-2" href="<?= base_url(); ?>inscricao">Inscreva-se</a>
				</li>
			</ul>
		</div>
	</nav>