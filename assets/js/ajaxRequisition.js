//Requisições para Visualizar Clientes (Pagina de Administrador)

function openViewClientAndUser(urlString){
	$.ajax({
		type:'post',		//Definimos o método HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: urlString, //Definindo o arquivo onde serão buscados os dados
		success: function(dados){
            for(var i=0;dados.length>i;i++){
                $('#nomeCliente').html(dados[i].Nome);
                $('#emailCliente').html(dados[i].Email);
                $('#cpfCliente').html(dados[i].CPF);
                $('#enderecoCliente').html(dados[i].Endereco);
                $('#cepCliente').html(dados[i].CEP);
                $('#cidadeCliente').html(dados[i].Cidade);
                $('#estadoCliente').html(dados[i].Estado);
            }
		}
	});
}