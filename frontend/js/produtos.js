

function addCard(descricao, preco){
	var card = document.createElement("div");
	card.classList.add('card');

	var img = document.createElement('img')	;
	img.classList.add('card-img-top');
	img.setAttribute('src', './imagens/produtos/produto1.jpg');
	card.appendChild(img);	
	
	var cardBody = document.createElement('div');
	cardBody.classList.add('card-body');

	cardTitle = document.createElement('h5');
	cardTitle.classList.add('card-title');
    cardTitle.textContent= descricao;

	cardValor = document.createElement('h5');
	cardValor.classList.add('valor-card');
    cardValor.textContent=`R$ ${preco}`; 

    cardBtn = document.createElement('a');
    cardBtn.classList.add('btn');
    cardBtn.classList.add('btn-success');
    cardBtn.classList.add('btn-block');
    cardBtn.classList.add('btn-card');
    cardBtn.textContent="COMPRAR";

    cardBody.appendChild(cardTitle);
    cardBody.appendChild(cardValor);
    cardBody.appendChild(cardBtn);

    card.appendChild(cardBody);   
	var rowProdutos = document.getElementsByClassName("row-produtos")[0].append(card);
}

function toggleForm(){
	$('.container-cadastro-produtos').toggle('slow');
}
function closeAlertForm(){
	$('.alert-danger').hide('slow');	
	$('.alert-success').hide('slow');	
}
function limpaForm(){
	$('form').each (function(){
	  	this.reset();
	});
}
function cadastrar(){
	var validacao = true;
	$('form').find('input[required]').each(function(){
	  if(!$(this).val()){
	    validacao = false;
	  }	  
	});
	if (!validacao) {
		$('.alert-danger').show('slow');

	} else {
		// alert("form ok");
		var descricao = $('#descricao-produto').val();
		var preco = $('#preco-produto').val();
		addCard(descricao, preco);
		limpaForm();
		$('.alert-success').show('slow');	
	}
}
$( document ).ready(function() {
    $('input').focus(function(){
    	closeAlertForm();
    });
});