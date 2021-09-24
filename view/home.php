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
    <title>Pampa Barber - Home</title>
     
    <link href="./cdn/bootstrap/css/bootstrap.min.css" rel="stylesheet">    
    <link href="./css/global.css" rel="stylesheet">
   <link href="./css/home.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#"><img src=".\imagens\logo.png" id="img-logo" alt="logo"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href=".\home.php">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href=".\produtos.php">Produtos</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href=".\servicos.php" >Serviços</a>
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
	<!-- ################ INÍCIO CONTEÚDO ################ -->


	<div class="jumbotron jumbotron-fluid home">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h1 class="mb-4">
						<i class="fas fa-cut"> Pampa Barber</i></h1>
					<h6 class="mb-4">
						Quer um serviço de Qualidade e um bom atendimento? É só chegar na <strong>Pampa Barber</strong>.</h6>


				</div>

				<div class="col-sm-6">
					<img src="imagens/home-intro.png" class="img-fluid" alt="intro">
				</div>
			</div>
		</div>
	<!--</div>-->

		<hr>

	<!--<div class="jumbotron jumbotron-fluid home-sobre">-->
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<img src="imagens/home-sobre.png" class="img-fluid" alt="intro">
				</div>

				<div class="col-sm-6">
					<h1 class="mb-4">
						<i class="fas fa-user-friends"> Sobre Nós</i></h1>
					<h6 class="mb-4">
						Inaugurada em Agosto de 2021, a <strong>Pampa Barber</strong> vem se reiventando a cada dia
						para sempre trazer o que há de melhor e de mais novo para seus clientes.</h6>

					<h6 class="mb-4">Reconhecida pelo ezímio trabalho e atendimento de qualidade.</h6>


				</div>

			</div>
		</div>
	</div>
	
	<hr>



	<div class="container main">
		<h1 class="text-center">
			<i class="fas fa-map-marker-alt"> Localização</i>
		</h1>
		<hr>
		<p class="text-center">Estamos localizados no coração da Cidade de Alegrete, Rio grande do sul.</p>

		<p class="text-center">Mais especificamente na Universidade Federal do Pampa, Campus Alegrete.</p>

		<iframe title="mapa"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3462.58734266562!2d-55.77078578449195!3d-29.78957158197585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95aab98a8f097415%3A0xba478dd53e4e9407!2sUniversidade%20Federal%20do%20Pampa%20-%20Campus%20Alegrete!5e0!3m2!1spt-BR!2sbr!4v1628555041120!5m2!1spt-BR!2sbr"
		width="100%" height="300" style="border-left:500px;" allowfullscreen=""></iframe>
	</div>



	<!-- <div class="container main">
		<hr>
		<h1 class="text-center">Aplicações JS</h1>

		<a onclick="addButton()" class="btn btn-danger btn-lg btn-block" role="button">Add Button</a>

		<a onclick="alertButton()" class="btn btn-warning btn-lg btn-block" role="button">Alert Button</a>

		<a onclick="returnButton()" class="btn btn-dark btn-lg btn-block" role="button">Return Button</a>

		<hr>
	</div>
-->

	
	<div class="container main">
	<div class="add_buttons">
		
	</div>
	</div>
	<hr>


	
	<!-- ################ FIM CONTEÚDO ################ -->	
	<footer class="page-footer font-small">
	  <div class="footer-copyright text-center py-3">© 2021 Copyright:
	    <a href="#">Pampa Barber</a>
	  </div>
	</footer>
	<script src="./cdn/jquery/jquery-3.4.1.min.js"></script>
    <script src="./cdn/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./js/home.js"></script>
</body>
</html>