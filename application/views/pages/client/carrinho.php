
	<section class="container body-main">
		<div class="my-5 text-center pb-5">
            <span class="h6 d-block">QUASE FINALIZANDO</span>
			<h2 class="display-4 text-primary">Check-out</h2>
        </div>
        <?php if(!empty($_SESSION['itensCarrinho'])) {  $total = 0; ?>
            <div class="row">
                <div class="col-md-12">
                <table class="table table-hover table-responsive-md">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">Cidade</th>
                            <th scope="col">Plano</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Remover</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($_SESSION['itensCarrinho'] as $keys => $item) { ?>
                            <tr>
                                <td><?= $item['nomeCidade'] ?></td>
                                <td><?= $item['tipoPlano'] ?></td>
                                <td><?= $item['precoLocal'] ?></td>
                                <td class="text-center">
                                    <a class="btn btn-danger btn-sm" id="optionsUser" href="<?= base_url('carrinho/remover/'.$item['idCidade']); ?>">Remover</a>
                                </td>
                            </tr>
                        <?php $total = $total + $item['precoLocal'] ;} ?>
                    </tbody>
                        
                </table>
                </div>
            </div>
            
            <hr class="bg-dark">

            <div class="row">
                <div class="bg-light box-shadow p-3 form-group col-lg-6 mx-auto ">
                    <h2 class="h6 text-primary">DADOS DO CLIENTE</h2>
                    
                            <?php foreach ($cliente as $client) { ?>

                                <input type="hidden" name="IDUsuario" id="IDUsuario" value="<?= $client->IDUsuario ?>" disabled>
                                    
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputNome">Nome</label>
                                        <input type="text" id="inputNome" name="inputNome" class="form-control" placeholder="Nome Completo" data-required-user="inputNome" value="<?= $client->Nome ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputCPF">CPF</label>
                                        <input type="text" id="inputCPF" name="inputCPF" class="form-control" placeholder="xxx.xxx.xxx-xx" data-required-user="inputCPF" value="<?= $client->CPF ?>" data-type="CPF" disabled>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="inputEmail">E-mail</label>
                                        <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Seu E-mail" data-required-user="inputEmail" value="<?= $client->Email ?>" disabled>
                                    </div>

                                    <div class="form-group col-12">
                                        <label for="inputEndereco">Endereço</label>
                                        <input type="text" id="inputEndereco" name="inputEndereco" class="form-control" placeholder="Número, nome da rua e bairro" data-required-user="inputEndereco" value="<?= $client->Endereco ?>" disabled>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputCidade">Cidade</label>
                                        <input type="text" id="inputCidade" name="inputCidade" class="form-control" data-required-user="inputCidade" value="<?= $client->Cidade ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-3 col-6">
                                        <label for="inputEstado">Estado</label>
                                        <select class="form-control" id="inputEstado" name="inputEstado" data-required-user="inputEstado" disabled>
                                            <option>Selecione o Estado</option>
                                            <option value="AC" <?= $client->Estado == 'AC' ? 'selected' : ''; ?> >Acre </option>
                                            <option value="AL" <?= $client->Estado == 'AL' ? 'selected' : ''; ?> >Alagoas</option>
                                            <option value="AP" <?= $client->Estado == 'AP' ? 'selected' : ''; ?> >Amapá</option>
                                            <option value="AM" <?= $client->Estado == 'AM' ? 'selected' : ''; ?> >Amazonas</option>
                                            <option value="BA" <?= $client->Estado == 'BA' ? 'selected' : ''; ?> >Bahia</option>
                                            <option value="CE" <?= $client->Estado == 'CE' ? 'selected' : ''; ?> >Ceará</option>
                                            <option value="DF" <?= $client->Estado == 'DF' ? 'selected' : ''; ?> >Distrito Federal</option> 
                                            <option value="ES" <?= $client->Estado == 'ES' ? 'selected' : ''; ?> >Espírito Santo</option>
                                            <option value="GO" <?= $client->Estado == 'GO' ? 'selected' : ''; ?> >Goiás</option>
                                            <option value="MA" <?= $client->Estado == 'MA' ? 'selected' : ''; ?> >Maranhão</option>
                                            <option value="MT" <?= $client->Estado == 'MT' ? 'selected' : ''; ?> >Mato Grosso</option>
                                            <option value="MS" <?= $client->Estado == 'MS' ? 'selected' : ''; ?> >Mato Grosso do Sul</option>
                                            <option value="MG" <?= $client->Estado == 'MG' ? 'selected' : ''; ?> >Minas Gerais</option>
                                            <option value="PA" <?= $client->Estado == 'PA' ? 'selected' : ''; ?> >Pará</option>
                                            <option value="PB" <?= $client->Estado == 'PB' ? 'selected' : ''; ?> >Paraíba</option>
                                            <option value="PR" <?= $client->Estado == 'PR' ? 'selected' : ''; ?> >Paraná</option>
                                            <option value="PE" <?= $client->Estado == 'PE' ? 'selected' : ''; ?> >Pernambuco</option>
                                            <option value="PI" <?= $client->Estado == 'PI' ? 'selected' : ''; ?> >Piauí</option>
                                            <option value="RJ" <?= $client->Estado == 'RJ' ? 'selected' : ''; ?> >Rio de Janeiro</option>
                                            <option value="RN" <?= $client->Estado == 'RN' ? 'selected' : ''; ?> >Rio Grande do Norte</option>
                                            <option value="RS" <?= $client->Estado == 'RS' ? 'selected' : ''; ?> >Rio Grande do Sul</option>
                                            <option value="RO" <?= $client->Estado == 'RO' ? 'selected' : ''; ?> >Rondônia</option>
                                            <option value="RR" <?= $client->Estado == 'RR' ? 'selected' : ''; ?> >Roraima</option>
                                            <option value="SC" <?= $client->Estado == 'SC' ? 'selected' : ''; ?> >Santa Catarina</option>
                                            <option value="SP" <?= $client->Estado == 'SP' ? 'selected' : ''; ?> >São Paulo</option>
                                            <option value="SE" <?= $client->Estado == 'SE' ? 'selected' : ''; ?> >Sergipe</option>
                                            <option value="TO" <?= $client->Estado == 'TO' ? 'selected' : ''; ?> >Tocantins</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3 col-6">
                                        <label for="inputCEP">CEP</label>
                                        <input type="text" id="inputCEP" name="inputCEP" class="form-control" placeholder="xxxxx-xxx" data-required-user="inputCEP" value="<?= $client->CEP ?>" data-type="CEP" disabled>
                                    </div>
                                </div>
                            <?php } ?>                 
                </div>

                <div class="bg-light rounded box-shadow p-3 form-group col-lg-5 mx-auto">
                    <h2 class="h6 text-primary">FORMA DE PAGAMENTO</h2>
                    <nav class="nav btn-group mb-3" id="formaPagamento" role="tablist">
                        <button type="button" class="btn btn-secondary active btn-sm" id="nav-cartao-tab" data-toggle="tab" href="#nav-cartao" role="tab" aria-controls="nav-cartao" aria-selected="true">Cartão de Crédito</button>
                        <button type="button" class="btn btn-secondary btn-sm" id="nav-boleto-tab" data-toggle="tab" href="#nav-boleto" role="tab" aria-controls="nav-boleto" aria-selected="false">Boleto Bancário</button>
                    </nav>

                    <div class="tab-content" id="formaPagamentoConteudo">
                        <div class="tab-pane fade show active" id="nav-cartao" role="tabpanel" aria-labelledby="nav-cartao-tab"> 
                            <div class="form-row">	
                                <div class="form-group col-md-6">
                                    <label for="inputNomeCartao">Nome no Cartão</label>
                                    <input type="text" id="inputNomeCartao" class="form-control" placeholder="Nome impresso no cartão">
                                </div>
                                <div class="form-group col-md-3 col-6">
                                    <label for="inputMesCartao">Mês</label>
                                    <select class="form-control" id="inputMesCartao">
                                        <option>Selecione o Mês</option>
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                        <option>06</option>
                                        <option>07</option>
                                        <option>08</option>
                                        <option>09</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-3 col-6">
                                    <label for="inputAnoCartao">Ano</label>
                                    <select class="form-control" id="inputAnoCartao">
                                        <option>Selecione o Ano</option>
                                        <option>2018</option>
                                        <option>2019</option>
                                        <option>2020</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                        <option>2023</option>
                                        <option>2024</option>
                                        <option>2025</option>
                                        <option>2026</option>
                                        <option>2027</option>
                                        <option>2028</option>
                                        <option>2029</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputNumero">Número no Cartão</label>
                                    <input type="text" id="inputNumero" class="form-control" placeholder="5555 5555 5555 5555">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputCodigo">Código de Segurança</label>
                                    <input type="text" id="inputCodigo" class="form-control" placeholder="xxx">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-boleto" role="tabpanel" aria-labelledby="nav-boleto-tab"> 
                            <p class="lead">Clique em contratar plano que enviaremos um boleto para seu e-mail.</p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } else { ?> 
            <div class="row">
                <div class="col-md-12 pt-5">
                    <div class="text-center">
                        <h3 class="display-4 text-primary">Você ainda não adicionou <br> nenhum destino! :/</h3>
                    </div>
                </div>
            </div>
        <?php } ?>

    </section>    