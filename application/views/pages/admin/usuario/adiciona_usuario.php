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
                            <form action="<?=base_url();?>administracao/usuario/salvar" class="form" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputNome">Nome</label>
                                        <input type="text" id="inputNome" name="inputNome" class="form-control" placeholder="Nome Completo" data-required-user="inputNome">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputCPF">CPF</label>
                                        <input type="text" id="inputCPF" name="inputCPF" class="form-control" placeholder="xxx.xxx.xxx-xx" data-required-user="inputCPF" maxlength="14" data-type="CPF">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputEmail">E-mail</label>
                                        <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Seu E-mail" data-required-user="inputEmail">
                                    </div>
                                    
                                    <div class="form-group col-md-3">
                                        <label for="inputSenha">Senha</label>
                                        <input type="password" id="inputSenha" name="inputSenha" class="form-control" placeholder="Senha de acesso" data-required-user="inputSenha">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="inputConfirmeSenha">Confirme a Senha</label>
                                        <input type="password" id="inputConfirmeSenha" name="inputConfirmeSenha" class="form-control" placeholder="Senha de acesso" data-required-user="inputConfirmeSenha">
                                    </div>

                                    <div class="form-group col-12">
                                        <label for="inputEndereco">Endereço</label>
                                        <input type="text" id="inputEndereco" name="inputEndereco" class="form-control" placeholder="Número, nome da rua e bairro" data-required-user="inputEndereco">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputCidade">Cidade</label>
                                        <input type="text" id="inputCidade" name="inputCidade" class="form-control" data-required-user="inputCidade">
                                    </div>
                                    <div class="form-group col-md-3 col-6">
                                        <label for="inputEstado">Estado</label>
                                        <select class="form-control" id="inputEstado" name="inputEstado" data-required-user="inputEstado">
                                            <option>Selecione o Estado</option>
                                            <option value="AC">Acre </option>
                                            <option value="AL">Alagoas</option>
                                            <option value="AP">Amapá</option>
                                            <option value="AM">Amazonas</option>
                                            <option value="BA">Bahia</option>
                                            <option value="CE">Ceará</option>
                                            <option value="DF">Distrito Federal</option> 
                                            <option value="ES">Espírito Santo</option>
                                            <option value="GO">Goiás</option>
                                            <option value="MA">Maranhão</option>
                                            <option value="MT">Mato Grosso</option>
                                            <option value="MS">Mato Grosso do Sul</option>
                                            <option value="MG">Minas Gerais</option>
                                            <option value="PA">Pará</option>
                                            <option value="PB">Paraíba</option>
                                            <option value="PR">Paraná</option>
                                            <option value="PE">Pernambuco</option>
                                            <option value="PI">Piauí</option>
                                            <option value="RJ">Rio de Janeiro</option>
                                            <option value="RN">Rio Grande do Norte</option>
                                            <option value="RS">Rio Grande do Sul</option>
                                            <option value="RO">Rondônia</option>
                                            <option value="RR">Roraima</option>
                                            <option value="SC">Santa Catarina</option>
                                            <option value="SP">São Paulo</option>
                                            <option value="SE">Sergipe</option>
                                            <option value="TO">Tocantins</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3 col-6">
                                        <label for="inputCEP">CEP</label>
                                        <input type="text" id="inputCEP" name="inputCEP" class="form-control" placeholder="xxxxx-xxx" data-required-user="inputCEP" data-type="CEP">
                                    </div>
                                </div>

                                <div class="form-row mt-4">   
                                    <div class="col-md-6 col-sm-12 float-left mb-3">
                                        <a href="<?=base_url();?>administracao/usuarios" class="btn btn-outline-danger btn-block" onclick="return confirm('Deseja realmente cancelar?\n(Todos os dados modificados serão perdidos)');">Cancelar</a>
                                    </div>
                                    <div class="col-md-6 col-sm-12 float-right mb-3">
                                        <button class="btn btn-outline-success btn-block" type="submit" onclick="return confirm('Deseja realmente inserir o usuário?');" id="confirmSubmit" disabled>Salvar</button>                
                                    </div>
				                </div>
                            </form>               
                        </div>
                    </div>                   
                </div>           
            </div>