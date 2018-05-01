<div id="content" class="bg-dark text-white">
                <span class="mobile-btn"></span>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-md-12">
                            <h4 class="display-4 text-info text-center">Bem-vindo aos Locais</h4>
                        </div>
                    </div>                    
                </div>

                <div class="container-fluid mt-5 mb-4" data-group="graficosPedidos">
                    <div class="row">
                        <div class="col col-md-12 mb-3 no-padding">
                            <h2 class="font-weight-light">Listagem dos Locais</h2>
                        </div>
                    </div>         
                    
                    <div class="row">                 
                        <div class="col-md-10 no-padding">           
                            <form id="search-form">
                                <div class="col-md-4 col-sm-12 no-padding">
                                    <input type="text" id="search-content" class="form-control" placeholder="Pesquisar...">       
                                </div>
                            </form>  
                        </div>

                        <div class="col-md-2 col-sm-12 float-right no-padding">
                            <a href="<?=base_url('administracao/local/novo');?>" class="btn btn-outline-success btn-block">Novo</a>                
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
                    <tbody id="content-body">
                        <?php foreach ($locais as $local) { ?>
                            <tr>
                                <td><?= $local->nomePais ?></td>
                                <td><?= $local->nomeCity ?></td>
                                <td><?= $local->precoLocal ?></td>
                                <td class="nav-item dropdown">
                                    <a class="btn btn-outline-secondary btn-sm dropdown-toggle" id="optionsUser"  role="button" data-toggle="dropdown" arial-haspopup="true" arial-expanded="false">Opções</a>

                                    <div class="dropdown-menu" aria-labelledby="optionsUser">
                                        <a class="dropdown-item" href="<?= base_url('administracao/local/editar/'.$local->IDLocal); ?>">Editar</a>
                                        <a class="dropdown-item" href="<?= base_url('administracao/local/excluir/'.$local->IDLocal); ?>" onclick="return confirm('Deseja realmente remover o local selecionado?');">Excluir</a>
                                        <a class="dropdown-item" onclick="openViewLocation('<?= base_url('administracao/local/visualizar/'.$local->IDLocal); ?>')" data-toggle="modal" data-target="#modalInformationLocal">Visualizar</a>
                                    </div>
                                </td>					
                            </tr>
                        <?php }?>
                    </tbody>
                    
                </table>

                <!-- Implementação do Modal -->
                <div class="modal fade text-dark" id="modalInformationLocal" tabindex="-1" role="dialog" aria-labelledby="modalInformationLocal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLocalTitulo">Informações do Local</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="my-2">
                                    <strong>Nome do País: </strong><span id="nomePaisModal"></span>
                                </div>
                                <div class="my-2">
                                    <strong>Nome da Cidade: </strong><span id="nomeCidadeModal"></span>
                                </div>
                                <div class="my-2">
                                    <strong>Preço: </strong>R$ <span id="precoLocalModal"></span>
                                </div>
                            <div>				
                        </div>
                    </div>
                </div>
                <!-- Finalização do Modal -->