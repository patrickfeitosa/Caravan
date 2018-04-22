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
                            <h2 class="font-weight-light">Editar Usuário</h2>
                        </div>
                    </div>                   
                </div>

                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col col-md-12 mb-3">
                            <form action="<?=base_url();?>administracao/usuario/salvar_edicao" class="form" method="POST">
                                <?php foreach ($usuario as $user) { ?>

                                    <input type="hidden" name="IDUsuario" id="IDUsuario" value="<?= $user->IDUsuario ?>">
                                    
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputNome">Nome</label>
                                            <input type="text" id="inputNome" name="inputNome" class="form-control" placeholder="Nome Completo" data-required-user="inputNome" value="<?= $user->Nome ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputCPF">CPF</label>
                                            <input type="text" id="inputCPF" name="inputCPF" class="form-control" placeholder="xxx.xxx.xxx-xx" data-required-user="inputCPF" value="<?= $user->CPF ?>" data-type="CPF">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="inputEmail">E-mail</label>
                                            <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Seu E-mail" data-required-user="inputEmail" value="<?= $user->Email ?>">
                                        </div>
                                        
                                        <div class="form-group col-md-3">
                                            <label for="inputSenha">Senha</label>
                                            <input type="password" id="inputSenha" name="inputSenha" class="form-control" placeholder="Senha de acesso" data-required-user="inputSenha" value="<?= $user->Senha ?>">
                                        </div>
                                        
                                        <div class="form-group col-md-3">
                                            <label for="inputSenha">Confirme a Senha</label>
                                            <input type="password" id="inputConfirmeSenha" name="inputConfirmeSenha" class="form-control" placeholder="Senha de acesso" data-required-user="inputConfirmeSenha" value="<?= $user->Senha ?>">
                                        </div>

                                        <div class="form-group col-12">
                                            <label for="inputEndereco">Endereço</label>
                                            <input type="text" id="inputEndereco" name="inputEndereco" class="form-control" placeholder="Número, nome da rua e bairro" data-required-user="inputEndereco" value="<?= $user->Endereco ?>">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="inputCidade">Cidade</label>
                                            <input type="text" id="inputCidade" name="inputCidade" class="form-control" data-required-user="inputCidade" value="<?= $user->Cidade ?>">
                                        </div>
                                        <div class="form-group col-md-3 col-6">
                                            <label for="inputEstado">Estado</label>
                                            <select class="form-control" id="inputEstado" name="inputEstado" data-required-user="inputEstado">
                                                <option>Selecione o Estado</option>
                                                <option value="AC" <?= $user->Estado == 'AC' ? 'selected' : ''; ?> >Acre </option>
                                                <option value="AL" <?= $user->Estado == 'AL' ? 'selected' : ''; ?> >Alagoas</option>
                                                <option value="AP" <?= $user->Estado == 'AP' ? 'selected' : ''; ?> >Amapá</option>
                                                <option value="AM" <?= $user->Estado == 'AM' ? 'selected' : ''; ?> >Amazonas</option>
                                                <option value="BA" <?= $user->Estado == 'BA' ? 'selected' : ''; ?> >Bahia</option>
                                                <option value="CE" <?= $user->Estado == 'CE' ? 'selected' : ''; ?> >Ceará</option>
                                                <option value="DF" <?= $user->Estado == 'DF' ? 'selected' : ''; ?> >Distrito Federal</option> 
                                                <option value="ES" <?= $user->Estado == 'ES' ? 'selected' : ''; ?> >Espírito Santo</option>
                                                <option value="GO" <?= $user->Estado == 'GO' ? 'selected' : ''; ?> >Goiás</option>
                                                <option value="MA" <?= $user->Estado == 'MA' ? 'selected' : ''; ?> >Maranhão</option>
                                                <option value="MT" <?= $user->Estado == 'MT' ? 'selected' : ''; ?> >Mato Grosso</option>
                                                <option value="MS" <?= $user->Estado == 'MS' ? 'selected' : ''; ?> >Mato Grosso do Sul</option>
                                                <option value="MG" <?= $user->Estado == 'MG' ? 'selected' : ''; ?> >Minas Gerais</option>
                                                <option value="PA" <?= $user->Estado == 'PA' ? 'selected' : ''; ?> >Pará</option>
                                                <option value="PB" <?= $user->Estado == 'PB' ? 'selected' : ''; ?> >Paraíba</option>
                                                <option value="PR" <?= $user->Estado == 'PR' ? 'selected' : ''; ?> >Paraná</option>
                                                <option value="PE" <?= $user->Estado == 'PE' ? 'selected' : ''; ?> >Pernambuco</option>
                                                <option value="PI" <?= $user->Estado == 'PI' ? 'selected' : ''; ?> >Piauí</option>
                                                <option value="RJ" <?= $user->Estado == 'RJ' ? 'selected' : ''; ?> >Rio de Janeiro</option>
                                                <option value="RN" <?= $user->Estado == 'RN' ? 'selected' : ''; ?> >Rio Grande do Norte</option>
                                                <option value="RS" <?= $user->Estado == 'RS' ? 'selected' : ''; ?> >Rio Grande do Sul</option>
                                                <option value="RO" <?= $user->Estado == 'RO' ? 'selected' : ''; ?> >Rondônia</option>
                                                <option value="RR" <?= $user->Estado == 'RR' ? 'selected' : ''; ?> >Roraima</option>
                                                <option value="SC" <?= $user->Estado == 'SC' ? 'selected' : ''; ?> >Santa Catarina</option>
                                                <option value="SP" <?= $user->Estado == 'SP' ? 'selected' : ''; ?> >São Paulo</option>
                                                <option value="SE" <?= $user->Estado == 'SE' ? 'selected' : ''; ?> >Sergipe</option>
                                                <option value="TO" <?= $user->Estado == 'TO' ? 'selected' : ''; ?> >Tocantins</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3 col-6">
                                            <label for="inputCEP">CEP</label>
                                            <input type="text" id="inputCEP" name="inputCEP" class="form-control" placeholder="xxxxx-xxx" data-required-user="inputCEP" value="<?= $user->CEP ?>" data-type="CEP">
                                        </div>
                                    </div>
                                <?php } ?>

                                <div class="form-row mt-4">   
                                    <div class="col-md-6 col-sm-12 float-left mb-3">
                                        <a href="<?=base_url();?>administracao/usuarios" class="btn btn-outline-danger btn-block" onclick="return confirm('Deseja realmente cancelar?\n(Todos os dados modificados serão perdidos)');">Cancelar</a>
                                    </div>
                                    <div class="col-md-6 col-sm-12 float-right mb-3">
                                        <button class="btn btn-outline-success btn-block" type="submit" onclick="return confirm('Deseja realmente salvar as alterações no usuário?');" id="confirmSubmit" disabled>Salvar</button>                
                                    </div>
				                </div>
                            </form>               
                        </div>
                    </div>                   
                </div>           
            </div>
            