function addCard(descricao, preco) {
	var card = document.createElement("div");
	card.classList.add('card');

	var img = document.createElement('img');

	img.classList.add('card-img-top');
	img.classList.add('img-card');
	img.setAttribute('id', geraIdAleatorio());

	var inputFile = document.getElementById('customFile');
	if (inputFile.files && inputFile.files[0]) {
		var reader = new FileReader();
		$('#label-img').text('Carregando imagem...');
		reader.onload = function (e) {
			img.setAttribute('src', e.target.result);

		}
		reader.readAsDataURL(inputFile.files[0]);


	}
	card.appendChild(img);

	var cardBody = document.createElement('div');
	cardBody.classList.add('card-body');

	cardTitle = document.createElement('h5');
	cardTitle.classList.add('card-title');
	cardTitle.textContent = descricao;

	cardValor = document.createElement('h5');
	cardValor.classList.add('valor-card');
	cardValor.textContent = `R$ ${preco}`;

	cardBtn = document.createElement('a');
	cardBtn.classList.add('btn');
	cardBtn.classList.add('btn-success');
	cardBtn.classList.add('btn-block');
	cardBtn.classList.add('btn-card');
	cardBtn.textContent = "COMPRAR";

	cardBody.appendChild(cardTitle);
	cardBody.appendChild(cardValor);
	cardBody.appendChild(cardBtn);

	card.appendChild(cardBody);
	var rowProdutos = document.getElementsByClassName("row-produtos")[0].append(card);
}

function addCard2(descricao, preco, src) {
	var card = document.createElement("div");
	card.classList.add('card');

	var img = document.createElement('img');

	img.classList.add('card-img-top');
	img.classList.add('img-card');
	img.setAttribute('id', geraIdAleatorio());
	img.setAttribute('src', src);


	// var inputFile = document.getElementById('customFile');
	// if (inputFile.files && inputFile.files[0]) {
	//     var reader = new FileReader();
	//     $('#label-img').text('Carregando imagem...');
	//     reader.onload = function (e) {	        	
	//     	img.setAttribute('src', e.target.result);

	//     }
	//     reader.readAsDataURL(inputFile.files[0]);


	// }
	card.appendChild(img);

	var cardBody = document.createElement('div');
	cardBody.classList.add('card-body');

	cardTitle = document.createElement('h5');
	cardTitle.classList.add('card-title');
	cardTitle.textContent = descricao;

	cardValor = document.createElement('h5');
	cardValor.classList.add('valor-card');
	cardValor.textContent = `R$ ${preco}`;

	cardBtn = document.createElement('a');
	cardBtn.classList.add('btn');
	cardBtn.classList.add('btn-success');
	cardBtn.classList.add('btn-block');
	cardBtn.classList.add('btn-card');
	cardBtn.textContent = "COMPRAR";

	cardBody.appendChild(cardTitle);
	cardBody.appendChild(cardValor);
	cardBody.appendChild(cardBtn);

	card.appendChild(cardBody);
	var rowProdutos = document.getElementsByClassName("row-produtos")[0].append(card);
}
function geraIdAleatorio() {
	var letters = "abcdefghijklmnopqrstuvwxyz";
	var plat_id = letters.charAt(Math.floor(Math.random() * letters.length)) + (Math.random() + 1).toString(36).substr(2, 9);
	var passo_1 = Math.random() * letters.length;
	var passo_2 = Math.floor(passo_1);
	var passo_3 = letters.charAt(passo_2)
	var passo_4 = Math.random() + 1;
	var passo_5 = passo_4.toString(36);
	var passo_6 = passo_5.substr(2, 9);
	// === Resultado ===
	// Concatena a letra randômica inicial com a string gerada na 2ª parte
	var novoId = passo_3 + passo_6;

	return novoId;
}

function toggleForm() {
	$('.container-cadastro-produtos').toggle('slow');
}
function closeAlertForm() {
	$('.alert-danger').hide('fast');
	$('.alert-success').hide('fast');
}
function limpaForm() {
	$('form').each(function () {
		this.reset();
	});
}
// function cadastrar(){
// 	var validacao = true;
// 	$('form').find('input[required]').each(function(){
// 	  if(!$(this).val()){
// 	    validacao = false;
// 	  }	  
// 	});
// 	if (!validacao) {
// 		$('.alert-danger').show('fast');

// 	} else {
// 		var descricao = $('#descricao-produto').val();
// 		var preco = $('#preco-produto').val();
// 		addCard(descricao, preco);
// 		limpaForm();
// 		$('.alert-success').show('slow');	
// 	}
// }
function adicionar() {
	var validacao = true;
	$('form').find('input[required]').each(function () {
		if (!$(this).val()) {
			validacao = false;
		}
	});
	if (!validacao) {
		$('.alert-danger').show('fast');

	} else {
		var descricao = $('#descricao-produto').val();
		var preco = $('#preco-produto').val();
		// var imagem = $('#customFile').val();
		var imagem = new FormData();
		imagem.append('customFile', $('#customFile')[0].files[0]);
		console.log(descricao);
		console.log(preco);
		console.log(imagem);
		$.ajax({
			type: "POST",
			url: "./../backend/controller/produtosController.php",
			contentType: false,
			processData: false,
			data: {imagem, descricao, preco},
			success: function (response) {
				// $.ajax({
				// 	type: "POST",
				// 	url: "./../backend/controller/produtosController.php",
				// 	contentType: false,
				// 	processData: false,
				// 	data: imagem,
				// 	success: function (response) {
		
				// 	}
				// });
			}
		});
		// $.ajax({
		// 	url: "./../backend/controller/produtosController.php",
		// 	type: "POST",
		// 	data: {
		// 		operacao: "adicionar",
		// 		descricao: descricao,
		// 		preco: preco
		// 	},
		// 	processData: false,
		// 	contentType: 'application/json'
		// });
		// $.post("./../backend/controller/produtosController.php", {
		// 		operacao: "adicionar",
		// 		descricao: descricao,
		// 		preco: preco,
		// 		imagem: imagem
		// }
		// , function(response){
		// 	alert(response);
		// });

		limpaForm();
		$('.alert-success').show('slow');
	}
}
function getProdutos() {

	$.post("./../backend/controller/produtosController.php", {
		operacao: "listar"

	},
		function (data, status) {
			var resp = jQuery.parseJSON(data);
			resp.forEach(element => {
				addCard2(element.descricao, element.preco, element.diretorio + element.nomeImg)
			});
		});
}
$(document).ready(function () {
	$('input').focus(function () {
		closeAlertForm();
	});
	// getProdutos();

});