<section class="container body-main">
		<div class="my-5 text-center">
			<span class="h6 d-block">VOCE NÃO ESTA LOGADO</span>
			<h1 class="display-4 text-primary">Acesso</h1>
		</div>

		<div class="row">
            <div class="col-lg-6 my-4">
                <div class="bg-light rounded box-shadow p-3">
                    <h2 class="h6 text-primary text-uppercase mb-4">Entre com sua conta</h2>
                    <form action="<?= base_url('cliente/acessar'); ?>" method="post">
                        <div class="form-group">
                            <label for="loginEmail">Email</label>
                            <input type="email" class="form-control" id="loginEmail" name="loginEmail">
                        </div>
                        <div class="form-group">
                            <label for="loginSenha">Password</label>
                            <input type="password" class="form-control" id="loginSenha" name="loginSenha">
                        </div>
                                
                        <button type="submit" class="btn btn-primary">Entrar na conta</button>
                        <small class="form-text text-muted">Esqueceu a senha? <a href="#">Clique aqui</a>.</small>
                    </form>
                </div>
            </div>

			<div class="col-lg-5 mx-auto order-first order-lg-1 my-4">
				<div class="bg-light rounded box-shadow p-3">
                    <h2 class="h6 text-primary text-uppercase">Ainda não possui conta?</h2>
				
				    <span class="d-block my-4 mb-5"> É simples e rápido estar mais próximo de realizar o seu sonho</span>
                    <h3 class="h4"><a href="<?= base_url('inscricao') ?>" class="badge badge-primary">Clique aqui</a> e realize seu cadastro!</h3>
				</div>
			</div>
		</div>
	</section>