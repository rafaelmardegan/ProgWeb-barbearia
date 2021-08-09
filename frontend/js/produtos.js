
function addCard(){
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
    cardTitle.textContent="teste título";

	cardValor = document.createElement('h5');
	cardValor.classList.add('valor-card');
    cardValor.textContent="R$ 0,01"; 

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