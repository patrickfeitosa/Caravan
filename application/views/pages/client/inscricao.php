	<!-- Implementação dos campos de Inscrição -->

	<section class="container body-main">
		<div class="my-5 text-center">
			<span class="h6 d-block">PROGRAME A VIAGEM DO SEU SONHO</span>
			<h1 class="display-4 text-primary">Inscreva-se</h1>
		</div>

		<div class="row">
			<form class="col-lg-8 centered" action="<?= base_url('cliente/cadastrar'); ?>" method="POST">
				<div class="form-row">
                    <div class="form-group col-md-6">
						<label for="inputNome">Nome</label>
                        <input type="text" id="inputNome" name="inputNome" class="form-control" placeholder="Nome Completo" data-required-client="inputNome">
                    </div>
                    <div class="form-group col-md-6">
                    	<label for="inputCPF">CPF</label>
                        <input type="text" id="inputCPF" name="inputCPF" class="form-control" placeholder="xxx.xxx.xxx-xx" data-required-client="inputCPF" maxlength="14" data-type="CPF">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputEmail">E-mail</label>
                    	<input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Seu E-mail" data-required-client="inputEmail">
                    </div>
                                    
					<div class="form-group col-md-4">
						<label for="inputSenha">Senha</label>
						<input type="password" id="inputSenha" name="inputSenha" class="form-control" placeholder="Senha de acesso" data-required-client="inputSenha">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputConfirmeSenha">Confirme a Senha</label>
                        <input type="password" id="inputConfirmeSenha" name="inputConfirmeSenha" class="form-control" placeholder="Senha de acesso" data-required-client="inputConfirmeSenha">
                    </div>

                    <div class="form-group col-12">
                        <label for="inputEndereco">Endereço</label>
                        <input type="text" id="inputEndereco" name="inputEndereco" class="form-control" placeholder="Número, nome da rua e bairro" data-required-client="inputEndereco">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputCidade">Cidade</label>
                        <input type="text" id="inputCidade" name="inputCidade" class="form-control" data-required-client="inputCidade">
                    </div>
					<div class="form-group col-md-3 col-6">
                        <label for="inputEstado">Estado</label>
                        <select class="form-control" id="inputEstado" name="inputEstado" data-required-client="inputEstado">
                            <option value="" selected>Selecione o Estado</option>
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
                        <input type="text" id="inputCEP" name="inputCEP" class="form-control" placeholder="xxxxx-xxx" data-required-client="inputCEP" data-type="CEP">
                	</div>
                </div>

				<div class="form-check mt-4">
					<label class="form-check-label">
						<input type="checkbox" class="form-check-input" id="checkTerm" data-required-client="checkTerm">
						Concordo com os Termos e condições de uso.
					</label>
				</div>

				<button type="submit" class="btn btn-primary btn-lg" id="confirmSubmit" disabled>Finalizar Cadastro</button>
			</form>
		</div>
	</section>