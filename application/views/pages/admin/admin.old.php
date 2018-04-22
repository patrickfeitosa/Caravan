<body class="bg-dark vertical-center">
    <div class="container-fluid form-admin">
        <div class="row">
            <div class="col-md-12">
                <form class="bg-light p-4 rounded box-shadow" action="<?= base_url('administracao/logar'); ?>" method="POST">
                    <h3 class="display-5 text-center pb-2">Bem-vindo</h3>
                    <div class="form-group pt-2">
                        <label for="userLogin">Usuário:</label>
                        <input type="email" name="userLogin" id="userLogin" class="form-control">
                    </div>

                    <div class="form-group py-2">
                        <label for="passwordLogin">Senha:</label>
                        <input type="password" name="passwordLogin" id="passwordLogin" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                    <small class="form-text pt-2">Esqueceu a senha? <a href="#">Clique aqui</a>.</small>
                </form>
            </div>
        </div>
    </div>