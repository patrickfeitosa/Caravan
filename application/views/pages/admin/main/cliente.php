            <div id="content" class="bg-dark text-white">
                <span class="mobile-btn"></span>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-md-12">
                            <h4 class="display-4 text-info text-center">Bem-vindo aos Clientes</h4>
                        </div>
                    </div>                    
                </div>

                <div class="container-fluid mt-5 mb-4" data-group="graficosPedidos">
                    <div class="row">
                        <div class="col col-md-12 mb-3 no-padding">
                            <h2 class="font-weight-light">Listagem dos Clientes</h2>
                        </div>
                    </div>         
                    
                    <div class="row">                 
                        <div class="col-md-12 no-padding">           
                            <form id="search-form">
                                <div class="col-md-4 col-sm-12 no-padding">
                                    <input type="text" id="search-content" class="form-control" placeholder="Pesquisar...">       
                                </div>
                            </form>  
                        </div>
                    </div>           
                </div>

                <table class="table table-hover table-responsive-md">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Último Pedido</th>
                            <th scope="col">Dados</th>
                        </tr>
                    </thead>
                    <tbody id="content-body">
                        <tr>
                            <?php foreach($clientes as $cliente) { ?>
                                <td><?= $cliente->Nome; ?></td>
                                <td><?= $cliente->Email; ?></td>
                                <td><?= $cliente->CPF; ?></td>
                                <td><a href="#" class="active-option">12345678</a></td>
                                <td class="nav-item dropdown">
                                    <a class="btn btn-outline-secondary btn-sm dropdown-toggle" id="optionsUser"  role="button" data-toggle="dropdown" arial-haspopup="true" arial-expanded="false">Opções</a>

                                    <div class="dropdown-menu" aria-labelledby="optionsUser">
                                        <a class="dropdown-item" href="<?= base_url('administracao/cliente/excluir/'.$cliente->IDUsuario); ?>">Excluir</a>
                                        <a class="dropdown-item" onclick="openViewClientAndUser('<?= base_url('administracao/cliente/visualizar/'.$cliente->IDUsuario); ?>')" data-toggle="modal" data-target="#modalInformation">Visualizar</a>
                                    </div>
                                </td>
                            <?php } ?>    					
                        </tr>
                    </tbody>                    
                </table>
            </div>

            <!-- Implementação do Modal -->
            <div class="modal fade" id="modalInformation" tabindex="-1" role="dialog" aria-labelledby="modalInformation" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLoginTitulo">Informações do Cliente</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="my-2">
                                <strong>Nome: </strong><span id="nomeCliente"></span>
                            </div>
                            <div class="my-2">
                                <strong>E-mail: </strong><span id="emailCliente"></span>
                            </div>
                            <div class="my-2">
                                <strong>CPF: </strong><span id="cpfCliente"></span>
                            </div>
                            <div class="my-2">
                                <strong>Endereço: </strong><span id="enderecoCliente"></span>
                            </div>
                            <div class="my-2">
                                <strong>CEP: </strong><span id="cepCliente"></span>
                            </div>
                            <div class="my-2">
                                <strong>Cidade: </strong><span id="cidadeCliente"></span>
                            </div>
                            <div class="my-2">
                                <strong>Estado: </strong><span id="estadoCliente"></span>
                            </div>
                        <div>				
                    </div>
                </div>
            </div>
            <!-- Finalização do Modal -->