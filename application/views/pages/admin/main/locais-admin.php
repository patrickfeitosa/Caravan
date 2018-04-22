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
                    <tbody>
                        <?php foreach ($locais as $local) { ?>
                            <tr>
                                <th scope="row"><?= $local->nomePais ?></th>
                                <td><?= $local->nomeCity ?></td>
                                <td><?= $local->precoLocal ?></td>
                                <td class="nav-item dropdown">
                                    <a class="btn btn-outline-secondary btn-sm dropdown-toggle" id="optionsUser"  role="button" data-toggle="dropdown" arial-haspopup="true" arial-expanded="false">Opções</a>

                                    <div class="dropdown-menu" aria-labelledby="optionsUser">
                                        <a class="dropdown-item" href="<?= base_url('administracao/local/editar/'.$local->IDLocal); ?>">Editar</a>
                                        <a class="dropdown-item" href="<?= base_url('administracao/local/excluir/'.$local->IDLocal); ?>" onclick="return confirm('Deseja realmente remover o local selecionado?');">Excluir</a>
                                        <a class="dropdown-item" href="<?= base_url(); ?>">Visualizar</a>
                                    </div>
                                </td>					
                            </tr>
                        <?php }?>
                    </tbody>
                    
                </table>