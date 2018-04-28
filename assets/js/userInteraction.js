/* Tratativa para Mascara de entrada */

$('[data-type]').each(function(){
	dataTarget = $(this).data('type');
	inputTarget = "#" + $(this).attr('id');

	if(dataTarget == "CPF"){
		$(inputTarget).mask("999.999.999-99");
	} else if(dataTarget == "CEP"){
		$(inputTarget).mask("99999-999");
	} else if (dataTarget == "Preco"){
		$(inputTarget).maskMoney({
			symbol:'R$ ', 
			showSymbol:true, 
			thousands:'.', 
			decimal:',', 
			symbolStay: true
		});
	} else if (dataTarget == "Data"){
		$(inputTarget).mask("99/99/9999");
	}
});

/* Fim tratativa para Mascara de entrada */

/* Estrutura para Tratativa de formulários de usuário que os campos precisam estar preenchidos */

var countComponents = 0;
var componentsNotEmpty = 0;
var components = new Array();
var confirmaSenha, senha, target;

//Verificando todos os elementos do formulário de cliente
$('[data-required-client]').each(function(){

	countComponents++;

	//Na edição, verificando quantos já estão preenchidos
	if($(this).val().length > 1){
		componentsNotEmpty++;
		components.push($(this).data('required-client'));
	}

	$(this).focusout(function(){		
	

		//Variáveis de Controle Global
		confirmaSenha = $('#inputConfirmeSenha').val();
		senha = $('#inputSenha').val();
		target = $(this).data('required-client');

		if(($(this).val() == "" || $(this).val() == null) && verificaJaAdicionado(target)){

			//Removendo do Array de Controle 
			removeJaAdicionado(target);
			componentsNotEmpty--;
			document.getElementById("confirmSubmit").disabled = true;

		} else if ($(this).val() != "" && componentsNotEmpty < countComponents && !verificaJaAdicionado(target)){
			
			//Criando Array de Controle e incrementando campos não vazio
			components.push(target);
			componentsNotEmpty++;	

		} else if (componentsNotEmpty == countComponents && validaSenha(senha, confirmaSenha) && $('#checkTerm').is(':checked')){
			
			//Habilitando botão de envio
			document.getElementById("confirmSubmit").disabled = false;

		} else {
			document.getElementById("confirmSubmit").disabled = true;
			$('#checkTerm').click(function(){
				if(componentsNotEmpty == countComponents && validaSenha(senha, confirmaSenha) && $(this).is(':checked')){
					document.getElementById("confirmSubmit").disabled = false;
				} else {
					document.getElementById("confirmSubmit").disabled = true;
				}	
			});
		}

		console.log(components);
		console.log(countComponents);
		console.log(componentsNotEmpty);
	});
});

//Verificando todos os elementos do formulário de usuário
$('[data-required-user]').each(function(){

	countComponents++;

	//Na edição, verificando quantos já estão preenchidos
	if($(this).val().length > 1){
		componentsNotEmpty++;
		components.push($(this).data('required-user'));
	}
	
	$(this).focusout(function(){		
	

		//Variáveis de Controle Global
		var confirmaSenha = $('#inputConfirmeSenha').val();
		var senha = $('#inputSenha').val();
		var target = $(this).data('required-user');

		if(($(this).val() == "" || $(this).val() == null) && verificaJaAdicionado(target)){

			//Removendo do Array de Controle 
			removeJaAdicionado(target);
			componentsNotEmpty--;
			document.getElementById("confirmSubmit").disabled = true;

		} else if (componentsNotEmpty == countComponents && validaSenha(senha, confirmaSenha)){	

			//Se todos os campos foram preenchidos e as senhas são iguais
			document.getElementById("confirmSubmit").disabled = false;
			
		} else if ($(this).val() != "" && componentsNotEmpty < countComponents && !verificaJaAdicionado(target)){
			
			//Criando Array de Controle e incrementando campos não vazio
			components.push(target);
			componentsNotEmpty++;	

		} else if($(this).is(':checked')){

			//Criando Array de Controle e incrementando campos não vazio
			components.push(target);
			componentsNotEmpty++;

		} else if (!$(this).is(':checked')){

			//Removendo do Array de Controle 
			removeJaAdicionado(target);
			componentsNotEmpty--;
			document.getElementById("confirmSubmit").disabled = true;

		} else {
			document.getElementById("confirmSubmit").disabled = true;
		}
	});
});

//Funções de manipulação
function verificaJaAdicionado(component){
	for(i = 0; i < components.length; i++){
		if(component == components[i]){
			return true;
		}
	}
}

function removeJaAdicionado(component){
	for(var i = components.length - 1; i >= 0; i--) {
		if(components[i] === component) {
			components.splice(i, 1);
		}
	}
}

function validaSenha(senha, confirmaSenha){
	if(senha == confirmaSenha){
		return true;
	}
}

/* Tratativa dos Formulários que não precisamd e validação de senha */

$('[data-required]').each(function(){

	countComponents++;

	//Na edição, verificando quantos já estão preenchidos
	if($(this).val().length > 1){
		componentsNotEmpty++;
		components.push($(this).data('required'));

		//Verificando se apos carregado, atinge condição para habilitar salvamento
		if(componentsNotEmpty == countComponents){				
			document.getElementById("confirmSubmit").disabled = false;
		}

	}
	
	$(this).focusout(function(){

		//Variáveis de Controle Global
		var target = $(this).data('required');

		if(($(this).val() == "" || $(this).val() == null || $(this).val() == '0,00' ) && verificaJaAdicionado(target)){

			//Removendo do Array de Controle 
			removeJaAdicionado(target);
			componentsNotEmpty--;
			document.getElementById("confirmSubmit").disabled = true;

		} else if (componentsNotEmpty == countComponents){	

			//Se todos os campos foram preenchidos e as senhas são iguais
			document.getElementById("confirmSubmit").disabled = false;
			
		} else if ($(this).val() != "" && componentsNotEmpty < countComponents && !verificaJaAdicionado(target)){
			
			//Criando Array de Controle e incrementando campos não vazio
			components.push(target);
			componentsNotEmpty++;	

			//Verificando se apos adicionado, atinge condição para habilitar salvamento
			if(componentsNotEmpty == countComponents){				
				document.getElementById("confirmSubmit").disabled = false;
			}

		} else{
			document.getElementById("confirmSubmit").disabled = true;
		}
	});
});


/* Fim Estrutura para Tratativa de formulários que os campos precisam estar preenchidos */