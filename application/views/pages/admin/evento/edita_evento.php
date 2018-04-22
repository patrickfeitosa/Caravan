<div id="content" class="bg-dark text-white">
                <span class="mobile-btn"></span>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-md-12">
                            <h4 class="display-4 text-info text-center">Bem-vindo aos Eventos</h4>
                        </div>
                    </div>                    
                </div>
                               
                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col col-md-10 mb-3">
                            <h2 class="font-weight-light">Editar Evento</h2>
                        </div>
                    </div>                   
                </div>

                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col col-md-12 mb-3">
                            <form action="<?=base_url();?>administracao/evento/salvar_edicao" class="form" method ="post">
                                <div class="form-row">
                                    <?php foreach ($eventos as $evento) { ?>
                                        <input type="hidden" id="inputId" name="inputId" value="<?= $evento->IDEvento?>">

                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label for="inputDataEvento">Data do Evento</label>
                                                <input type="text" id="inputDataEvento" class="form-control" name="inputDataEvento" placeholder="Insira uma Data" value="<?= $evento->Data_Evento ?>" data-required="inputDataEvento" data-type="Data">
                                            </div>
                                            <div class="form-group col-md-3">
                                                    <label for="inputPrecoEvento">Preço do Evento</label>
                                                    <input type="text" id="inputPrecoEvento" class="form-control" name="inputPrecoEvento" placeholder="R$ 00,00" value="<?= $evento->Preco_Evento?>" data-required="inputPrecoEvento" data-type="Preco">
                                            </div>

                                            <div class="form-group col-md-6">
                                                    <label for="inputEvento">Evento</label>
                                                    <input type="text" id="inputEvento" class="form-control" name="inputEvento" placeholder="Insira o Evento" value="<?= $evento->Evento ?>" data-required="inputPreco">
                                            </div>    

                                            <div class="form-group col-md-6">
                                                <label for="inputCidade">Cidade</label>
                                                <select class="form-control" id="inputCidade" name="inputCidade" data-required="inputCidade">
                                                    <option>Selecione a Cidade</option>
                                                    <?php foreach($locais as $local) { ?>
                                                        <option value="<?= $local->IDLocal ?>" <?= $local->IDLocal == $evento->IDLocal ? 'selected' : ''; ?>> <?= $local->nomeCity ?> </option>
                                                    <?php } ?>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="inputLocal">Local</label>
                                                <input type="text" id="inputLocal" class="form-control" name="inputLocal" placeholder="Insira o Local" value="<?= $evento->Local_Evento ?>" data-required="inputLocal">
                                            </div>   
                                        </div>
                                    <?php } ?>    
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6 col-sm-12 float-left mb-3">
                                        <a href="<?=base_url();?>administracao/eventos" class="btn btn-outline-danger btn-block" onclick="return confirm('Deseja realmente cancelar?\n(Todos os dados modificados serão perdidos)');">Cancelar</a>
                                    </div>
                                    
                                    <div class="col-md-6 col-sm-12 float-right mb-3">
                                        <button class="btn btn-outline-success btn-block" type="submit" onclick="return confirm('Deseja realmente salvar as alterações?');" id="confirmSubmit" disabled>Salvar</button>                
                                    </div>                                      
				                </div>
                            </form>               
                        </div>
                    </div>                   
                </div>            
            </div>