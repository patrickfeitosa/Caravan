            <div id="content" class="bg-dark text-white">
                <span class="mobile-btn"></span>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-md-12">
                            <h4 class="display-4 text-info text-center">Bem-vindo aos Clientes</h4>
                        </div>
                    </div>                    
                </div>

                <div class="container-fluid mt-5" data-group="graficosPedidos">
                    <div class="row">
                        <div class="col col-md-12 mb-3">
                            <h2 class="font-weight-light">Listagem dos Clientes</h2>
                        </div>
                    </div>                   
                </div>

                <table class="table table-hover table-responsive-md">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Usuário</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Último Pedido</th>
                            <th scope="col">Dados</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">23/10</th>
                            <td>Julian Baker</td>
                            <td>The Academy</td>
                            <td><a href="#" class="active-option">12345678</a></td>
                            <td class="nav-item dropdown">
                                <a class="btn btn-outline-secondary btn-sm dropdown-toggle" id="optionsUser"  role="button" data-toggle="dropdown" arial-haspopup="true" arial-expanded="false">Opções</a>

                                <div class="dropdown-menu" aria-labelledby="optionsUser">
                                    <a class="dropdown-item" href="<?= base_url(); ?>local">Editar</a>
                                    <a class="dropdown-item" href="<?= base_url(); ?>local">Excluir</a>
                                    <a class="dropdown-item" href="<?= base_url(); ?>local">Visualizar</a>
                                </div>
                            </td>					
                        </tr>
                    </tbody>
                    
                </table>
            </div>