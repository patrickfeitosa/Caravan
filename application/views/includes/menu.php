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
						<a class="dropdown-item" href="<?= base_url('local'); ?>">California</a>
						<a class="dropdown-item" href="<?= base_url('local'); ?>">Paris</a>
						<a class="dropdown-item" href="<?= base_url('local'); ?>">Dublin</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('planos'); ?>">Planos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('contato'); ?>">Contato</a>
				</li>
				<?php if(isset($_SESSION['logadoUsuario'])) { ?>
					<li class="nav-item dropdown">
						<a class="btn btn-outline-primary ml-md-2 " id="menuUsuario" role="button" data-toggle="dropdown" arial-haspopup="true" arial-expanded="false" href="#">
							Perfil
						</a>

						<div class="dropdown-menu" aria-labelledby="menuUsuario">
							<a class="dropdown-item" href="<?= base_url('cliente/perfil'); ?>">Meu Perfil</a>
							<a class="dropdown-item" href="<?= base_url('cliente/pedidos'); ?>">Meus Pedidos</a>
							<a class="dropdown-item" href="<?= base_url('cliente/sair'); ?>">Sair</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="btn btn-outline-primary ml-md-2" href="<?= base_url('carrinho'); ?>">Carrinho</a>
					</li>
				<?php } else { ?>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('cliente/acessar'); ?>" data-toggle="modal" data-target="#modalLogin">Login</a>
					</li>
					<li class="nav-item">
						<a class="btn btn-outline-primary ml-md-2" href="<?= base_url(); ?>inscricao">Inscreva-se</a>
					</li>
				<?php } ?>
			</ul>
		</div>
	</nav>