<?php
session_start();
if(!isset($_SESSION['usuario'])){
	header('Location: ../login.php?erro=naoAutorizado');
	exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pampa Barber - Serviços</title>
    <link href="./cdn/bootstrap/css/bootstrap.min.css" rel="stylesheet">    
   <link href="./css/servicos.css" rel="stylesheet">
   <link rel="shortcut icon" href="imagens/fav.ico" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">   
</head>
<body style="background-image: url(imagens/100px180/bg.png);">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#"><img src=".\imagens\logo.png" id="img-logo" alt="logo"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item">
	        <a class="nav-link" href=".\home.php">Home </a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href=".\produtos.php">Produtos</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href=".\servicos.php" >Serviços <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href=".\contato.php" >Contato</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href=".\sobre.php" >Sobre</a>
	      </li>	      	      
	    </ul>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
	        <a class="btn btn-dark " id="logout" href="..\backend\controller\logoutController.php" >	
			Logout
			<i class="bi bi-box-arrow-right"></i>			
			</a>
	      </li>				
		</ul>
	  </div>
	</nav>
	<div class="alert alert-light" style="background-color: rgba(0, 0, 0, 0.1);" role="alert">
		<h4 style="text-align: center;" ><span class="titulo">Alguns de Nossos Serviços</span></h4>
	  </div>
	  
	<!-- ################ INÍCIO CONTEÚDO ################ -->
	<div class="container card-servicos">	
		<div class="cards1">			  
			<div class="card-deck">
				<!-- <div class="card":
				  <img class="card-img-top" src="imagens/100px180/corte.jpg" alt="Imagem de capa do card">
				  <div class="card-body">
					<h5 class="card-title text-center">Corte do cabelo</h5>
					<p class="card-text" >Contamos com profissionais preparados para realizar o seu corte da maneira que desejar.</p>
				  </div>
				  <div class="card-footer">
					<a class="btn btn-primary btn-block" role="button">Agendar</a>
					<a class="btn btn-secondary btn-block" href="https://api.whatsapp.com/send?phone=5555984618335&text=Ol%C3%A1%2C%20gostaria%20de%20receber%20mais%20informa%C3%A7%C3%B5es%20sobre%20um%20dos%20seus%20servi%C3%A7os!" role="button">Tirar dúvidas</a>
				  </div>
				</div>
				<div class="card">
				  <img class="card-img-top" src="imagens/100px180/barba.jpg" alt="Imagem de capa do card">
				  <div class="card-body">
					<h5 class="card-title text-center">Ajuste de barba</h5>
					<p class="card-text">Está precisando dar aquela aparada na barba e deixá-la perfeita, está no lugar certo!</p>
				  </div>
				  <div class="card-footer">
					<a class="btn btn-primary btn-block" onclick="showModalPopUp2()" role="button">Agendar</a>
					<a class="btn btn-secondary btn-block"  href="https://api.whatsapp.com/send?phone=5555984618335&text=Ol%C3%A1%2C%20gostaria%20de%20receber%20mais%20informa%C3%A7%C3%B5es%20sobre%20um%20dos%20seus%20servi%C3%A7os!" role="button">Tirar dúvidas</a>
				  </div>
				</div>
				<div class="card">
				  <img class="card-img-top" src="imagens/100px180/penteado.jpg" alt="Imagem de capa do card">
				  <div class="card-body">
					<h5 class="card-title text-center">Penteados personalizados</h5>
					<p class="card-text">Vai para um evento e deseja prepara aquele penteado top para marcar presença, basta escolher o penteado que deixarmos igual!</p>
				  </div>
				  <div class="card-footer">
					<a class="btn btn-primary btn-block" onclick="showModalPopUp3()" role="button">Agendar</a>
					<a class="btn btn-secondary btn-block"  href="https://api.whatsapp.com/send?phone=5555984618335&text=Ol%C3%A1%2C%20gostaria%20de%20receber%20mais%20informa%C3%A7%C3%B5es%20sobre%20um%20dos%20seus%20servi%C3%A7os!" role="button">Tirar dúvidas</a>
				  </div>
				</div> -->
			</div>
		</div>
		<br>
		<!-- <div class="cards2">
			<div class="card-deck">
				<div class="card">
				  <img class="card-img-top" src="imagens/100px180/infantil.jpg" alt="Imagem de capa do card">
				  <div class="card-body">
					<h5 class="card-title text-center">Corte infantil</h5>
					<p class="card-text">Nossos profissionais estão preparados para efetuar o primeiro corte do seu filho com segurança, paciência e qualidade!</p>
				  </div>
				  <div class="card-footer">
					<a class="btn btn-primary btn-block" onclick="showModalPopUp4()" role="button">Agendar</a>
					<a class="btn btn-secondary btn-block"  href="https://api.whatsapp.com/send?phone=5555984618335&text=Ol%C3%A1%2C%20gostaria%20de%20receber%20mais%20informa%C3%A7%C3%B5es%20sobre%20um%20dos%20seus%20servi%C3%A7os!" role="button">Tirar dúvidas</a>
				  </div>
				</div>
				<div class="card">
				  <img class="card-img-top" src="imagens/100px180/tratamento.jpg" alt="Imagem de capa do card">
				  <div class="card-body">
					<h5 class="card-title text-center">Tratamentos</h5>
					<p class="card-text">Nossa barbearia também atende serviços de tratamentos de pele, como toalhas quentes para aliviar pelos encavados.</p>
				  </div>
				  <div class="card-footer">
					<a class="btn btn-primary btn-block" onclick="showModalPopUp5()" role="button">Agendar</a>
					<a class="btn btn-secondary btn-block"  href="https://api.whatsapp.com/send?phone=5555984618335&text=Ol%C3%A1%2C%20gostaria%20de%20receber%20mais%20informa%C3%A7%C3%B5es%20sobre%20um%20dos%20seus%20servi%C3%A7os!" role="button">Tirar dúvidas</a>
				  </div>
				</div>
				<div class="card">
				  <img class="card-img-top" src="imagens/100px180/home.jpg" alt="Imagem de capa do card">
				  <div class="card-body">
					<h5 class="card-title text-center">Home Service</h5>
					<p class="card-text">Tenha um corte de cabelo personalizado diretamente no conforto de sua casa, basta agendar que iremos até sua residência.</p>
				  </div>
				  <div class="card-footer">
					<a class="btn btn-primary btn-block" onclick="showModalPopUp6()" role="button">Agendar</a>
					<a class="btn btn-secondary btn-block"  href="https://api.whatsapp.com/send?phone=5555984618335&text=Ol%C3%A1%2C%20gostaria%20de%20receber%20mais%20informa%C3%A7%C3%B5es%20sobre%20um%20dos%20seus%20servi%C3%A7os!" role="button">Tirar dúvidas</a>
				  </div>
				</div>
			</div>
		</div> -->
	</div>
	<br>
	<!-- ################ FIM CONTEÚDO ################ -->
	<footer class="page-footer font-small">
	  <div class="footer-copyright text-center py-3" style="background-color: rgba(0, 0, 0, 0.1);">© 2021 Copyright:
	    <a href="#">Pampa Barber</a>
	  </div>
	</footer>		
	<script src="./cdn/jquery/jquery-3.4.1.min.js"></script>
    <script src="./cdn/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./js/servicos.js"></script>
</body>
</html>

<script>
var popUpObj;
function showModalPopUp1(){
	popUpObj=window.open("https://calendly.com/pampa-barber/home-service","ModalPopUp", "toolbar=no," +"scrollbars=no," + "location=no," + "statusbar=no," + "menubar=no," +"resizable=0," +"width=400," + "height=650");
	popUpObj.focus();
	LoadModalDiv();
}
function showModalPopUp2(){
	popUpObj=window.open("https://calendly.com/pampa-barber/home-service","ModalPopUp", "toolbar=no," +"scrollbars=no," + "location=no," + "statusbar=no," + "menubar=no," +"resizable=0," +"width=400," + "height=650");
	popUpObj.focus();
	LoadModalDiv();
}
function showModalPopUp3(){
	popUpObj=window.open("https://calendly.com/pampa-barber/home-service","ModalPopUp", "toolbar=no," +"scrollbars=no," + "location=no," + "statusbar=no," + "menubar=no," +"resizable=0," +"width=400," + "height=650");
	popUpObj.focus();
	LoadModalDiv();
}
function showModalPopUp4(){
	popUpObj=window.open("https://calendly.com/pampa-barber/home-service","ModalPopUp", "toolbar=no," +"scrollbars=no," + "location=no," + "statusbar=no," + "menubar=no," +"resizable=0," +"width=400," + "height=650");
	popUpObj.focus();
	LoadModalDiv();
}
function showModalPopUp5(){
	popUpObj=window.open("https://calendly.com/pampa-barber/home-service","ModalPopUp", "toolbar=no," +"scrollbars=no," + "location=no," + "statusbar=no," + "menubar=no," +"resizable=0," +"width=400," + "height=650");
	popUpObj.focus();
	LoadModalDiv();
}
function showModalPopUp6(){
	popUpObj=window.open("https://calendly.com/pampa-barber/home-service","ModalPopUp", "toolbar=no," +"scrollbars=no," + "location=no," + "statusbar=no," + "menubar=no," +"resizable=0," +"width=400," + "height=650");
	popUpObj.focus();
	LoadModalDiv();
}
</script>