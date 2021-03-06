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

function openViewLocation(urlString){
	$.ajax({
		type:'post',		//Definimos o método HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: urlString, //Definindo o arquivo onde serão buscados os dados
		success: function(dados){
            for(var i=0;dados.length>i;i++){
                $('#nomeCidadeModal').html(dados[i].nomeCity);
                $('#nomePaisModal').html(dados[i].nomePais);
                $('#precoLocalModal').html(dados[i].precoLocal);
            }
		}
	});
}

$('#inputCidadesGold').change(function(){
    var id = $(this).val();
    $.ajax({
		type:'post',		//Definimos o método HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: 'http://localhost/caravan/administracao/local/visualizar/' + id, //Definindo o arquivo onde serão buscados os dados
		success: function(dados){
            for(var i=0;dados.length>i;i++){
                $('#precoLocalGold').html(dados[i].precoLocal);
                $('#localGold').val(dados[i].precoLocal);
                $('#nomeCidadeGold').val(dados[i].nomeCity);
            }
		}
	});
});

$('#inputCidadesPlantinum').change(function(){
    var id = $(this).val();
    $.ajax({
		type:'post',		//Definimos o método HTTP usado
		dataType: 'json',	//Definimos o tipo de retorno
		url: 'http://localhost/caravan/administracao/local/visualizar/' + id, //Definindo o arquivo onde serão buscados os dados
		success: function(dados){
            for(var i=0;dados.length>i;i++){
                var price = dados[i].precoLocal.split(".").join(""); //* 1.5;
                var finalPrice = parseFloat(price.split(",").join(".")) * 1.5;
                finalPrice = finalPrice.toString().split(".").join(",");
                $('#precoLocalPlantinum').html(finalPrice);
                $('#localPlantinum').val(finalPrice);
                $('#nomeCidadePlantinum').val(dados[i].nomeCity);
            }
		}
	});
});