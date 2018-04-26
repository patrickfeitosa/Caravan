<div id="content" class="bg-dark text-white">
                <span class="mobile-btn"></span>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-md-12">
                            <h4 class="display-4 text-info text-center">Bem-vindo aos Eventos</h4>
                        </div>
                    </div>                    
                </div>

                <div class="container-fluid mt-5 mb-4" data-group="graficosPedidos">
                    <div class="row">
                        <div class="col col-md-12 mb-3 no-padding">
                            <h2 class="font-weight-light">Listagem dos Eventos</h2>
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
                            <a href="<?=base_url('administracao/evento/novo');?>" class="btn btn-outline-success btn-block">Novo</a>                
                        </div>
                    </div>           
                </div>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Data</th>
                            <th scope="col">Evento</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Local</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody id="content-body">
                        <?php foreach($eventos as $evento) { ?>
                            <tr>
                                <td><?= $evento->Data_Evento ?></td>
                                <td><?= $evento->Evento ?></td>
                                <td><?= $evento->nomeCity ?></td>
                                <td><?= $evento->Local_Evento ?></td>
                                <td><?= $evento->Preco_Evento ?></td>
                                <td class="nav-item dropdown">
                                    <a class="btn btn-outline-secondary btn-sm dropdown-toggle" id="optionsUser"  role="button" data-toggle="dropdown" arial-haspopup="true" arial-expanded="false">Opções</a>

                                    <div class="dropdown-menu" aria-labelledby="optionsUser">
                                        <a class="dropdown-item" href="<?= base_url('administracao/evento/editar/'.$evento->IDEvento); ?>">Editar</a>
                                        <a class="dropdown-item" href="<?= base_url('administracao/evento/excluir/'.$evento->IDEvento); ?>" onclick="return confirm('Deseja realmente remover o local selecionado?');">Excluir</a>
                                        <a class="dropdown-item" href="<?= base_url(); ?>local">Visualizar</a>
                                    </div>
                                </td>					
                            </tr>
                        <?php } ?>    
                    </tbody>
                    
                </table>