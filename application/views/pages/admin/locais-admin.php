<div id="content" class="bg-dark text-white">
                <span class="mobile-btn"></span>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-md-12">
                            <h4 class="display-4 text-info text-center">Bem-vindo aos Locais</h4>
                        </div>
                    </div>                    
                </div>
                               
                <div class="container-fluid mt-5" data-group="graficosPedidos">
                    <div class="row">
                        <div class="col col-md-10 mb-3">
                            <h2 class="font-weight-light">Listagem dos Locais</h2>
                        </div>
                        <div class="col-md-2 col-sm-12 float-right mb-3">
                            <a href="#" class="btn btn-outline-success btn-block">Novo</a>                
                        </div>
                    </div>                   
                </div>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">País</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">23/10</th>
                            <td>Julian Baker</td>
                            <td>The Academy</td>
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