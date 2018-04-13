<div id="content" class="bg-dark text-white">
                <span class="mobile-btn"></span>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-md-12">
                            <h4 class="display-4 text-info text-center">Bem-vindo aos Locais</h4>
                        </div>
                    </div>                    
                </div>
                               
                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col col-md-10 mb-3">
                            <h2 class="font-weight-light">Novo Local</h2>
                        </div>
                    </div>                   
                </div>

                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col col-md-12 mb-3">
                            <form action="<?=base_url();?>administracao/local/salvar" class="form" method ="post">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputNome">Nome do País</label>
                                        <input type="text" id="inputNome" class="form-control" name="inputNome" placeholder="Insira o País">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputCidade">Nome da Cidade</label>
                                        <input type="text" id="inputCidade" class="form-control" name="inputCidade" placeholder="Insira a Cidade">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="inputPreco">Preço para o Local</label>
                                        <input type="email" id="inputPreco" class="form-control" name="inputPreco" placeholder="R$ 00,00">
                                    </div>    
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6 col-sm-12 float-left mb-3">
                                        <a href="<?=base_url();?>administracao/local/novo" class="btn btn-outline-danger btn-block">Cancelar</a>
                                    </div>
                                    
                                    <div class="col-md-6 col-sm-12 float-right mb-3">
                                        <button class="btn btn-outline-success btn-block" type="submit">Salvar</button>                
                                    </div>                                      
				                </div>
                            </form>               
                        </div>
                    </div>                   
                </div>            
            </div>