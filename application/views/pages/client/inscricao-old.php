	<!-- Implementação dos campos de Inscrição -->

	<section class="container body-main">
		<div class="my-5 text-center">
			<span class="h6 d-block">PROGRAME A VIAGEM DO SEU SONHO</span>
			<h1 class="display-4 text-primary">Inscreva-se</h1>
		</div>

		<div class="row">
			<form class="col-lg-6" action="">
				<div class="form-row">
                    <div class="form-group col-md-6">
						<label for="inputNome">Nome</label>
                        <input type="text" id="inputNome" name="inputNome" class="form-control" placeholder="Nome Completo" data-required-user="inputNome">
                    </div>
                    <div class="form-group col-md-6">
                    	<label for="inputCPF">CPF</label>
                        <input type="text" id="inputCPF" name="inputCPF" class="form-control" placeholder="xxx.xxx.xxx-xx" data-required-user="inputCPF" maxlength="14" data-type="CPF">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputEmail">E-mail</label>
                    	<input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Seu E-mail" data-required-user="inputEmail">
                    </div>
                                    
					<div class="form-group col-md-4">
						<label for="inputSenha">Senha</label>
						<input type="password" id="inputSenha" name="inputSenha" class="form-control" placeholder="Senha de acesso" data-required-user="inputSenha">
                    </div>

                    <div class="form-group col-md-4">
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


				<div class="bg-light rounded box-shadow p-3 form-group">
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

				<div class="form-check">
					<label class="form-check-label">
						<input type="checkbox" class="form-check-input">
						Concordo com os <a href="#">Termos e condições de uso.</a>
					</label>
				</div>

				<button type="submit" class="btn btn-primary btn-lg">Contratar Plano</button>
			</form>

			<div class="col-lg-5 mx-auto order-first order-lg-1 mb-5">
				<h2 class="h6 text-primary ">PLANO ESCOLHIDO</h2>
				<div class="bg-light rounded p-4 box-shadow">
					<h2>Platinum <span class="badge badge-success">Novo</span></h2>			
					<ul class="lista-plano list-unstyled">
						<li>→ 60 dias de viagem</li>
						<li>→ 6 destinos diferentes</li>
						<li>→ Tudo pago pela empresa</li>
						<li>→ Ingressos pra festas</li>
					</ul>
					<form>
						<div class="form-group">
							<select class="form-control bg-light" id="inputCidades">
								<option>Selecione a Cidade</option>
								<option>California</option>
								<option>Paris</option>
								<option>Dublin</option>
							</select>
						</div>
					</form>
					<div class="row mt-4">
						<div class="col">
							<span class="h4">R$7.500</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>