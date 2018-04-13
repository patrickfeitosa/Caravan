<div id="content" class="bg-dark text-white">
                <span class="mobile-btn"></span>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-md-12">
                            <h4 class="display-4 text-info text-center">Bem-vindo aos Usuários</h4>
                        </div>
                    </div>                    
                </div>
                               
                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col col-md-10 mb-3">
                            <h2 class="font-weight-light">Novo Usuário</h2>
                        </div>
                    </div>                   
                </div>

                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col col-md-12 mb-3">
                            <form action="<?=base_url();?>administracao/usuario/salvar" class="form" method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputNome">Nome</label>
                                        <input type="text" id="inputNome" class="form-control" placeholder="Nome Completo">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputCPF">CPF</label>
                                        <input type="text" id="inputCPF" class="form-control" placeholder="xxx.xxx.xxx-xx">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputEmail">E-mail</label>
                                        <input type="email" id="inputNome" class="form-control" placeholder="Seu E-mail">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputSenha">Senha</label>
                                        <input type="password" id="inputCPF" class="form-control" placeholder="Senha de acesso">
                                    </div>

                                    <div class="form-group col-12">
                                        <label for="inputEndereco">Endereço</label>
                                        <input type="text" id="inputEndereco" class="form-control" placeholder="Número, nome da rua e bairro">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputCidade">Cidade</label>
                                        <input type="text" id="inputCidade" class="form-control">
                                    </div>
                                    <div class="form-group col-md-3 col-6">
                                        <label for="inputEstado">Estado</label>
                                        <select class="form-control" id="inputEstado">
                                            <option>Selecione o Estado</option>
                                            <option>Acre </option>
                                            <option>Alagoas</option>
                                            <option>Amapá</option>
                                            <option>Amazonas</option>
                                            <option>Bahia</option>
                                            <option>Ceará</option>
                                            <option>Distrito Federal</option> 
                                            <option>Espírito Santo</option>
                                            <option>Goiás</option>
                                            <option>Maranhão</option>
                                            <option>Mato Grosso</option>
                                            <option>Mato Grosso do Sul</option>
                                            <option>Minas Gerais</option>
                                            <option>Pará</option>
                                            <option>Paraíba</option>
                                            <option>Paraná</option>
                                            <option>Pernambuco</option>
                                            <option>Piauí</option>
                                            <option>Rio de Janeiro</option>
                                            <option>Rio Grande do Norte</option>
                                            <option>Rio Grande do Sul</option>
                                            <option>Rondônia</option>
                                            <option>Roraima</option>
                                            <option>Santa Catarina</option>
                                            <option>São Paulo</option>
                                            <option>Sergipe</option>
                                            <option>Tocantins</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3 col-6">
                                        <label for="inputCEP">CEP</label>
                                        <input type="text" id="inputCEP" class="form-control" placeholder="xxxxx-xxx">
                                    </div>
                                </div>

                                <div class="form-row mt-4">   
                                    <div class="col-md-6 col-sm-12 float-left mb-3">
                                        <a href="<?=base_url();?>administracao/usuario/novo" class="btn btn-outline-danger btn-block">Cancelar</a>
                                    </div>
                                    <div class="col-md-6 col-sm-12 float-right mb-3">
                                        <button class="btn btn-outline-success btn-block" type="submit">Salvar</button>                
                                    </div>
				                </div>
                            </form>               
                        </div>
                    </div>                   
                </div>    

                <div class="container-fluid mt-5">
                    <div class="row">
                    </div>                   
                </div>          
            </div>