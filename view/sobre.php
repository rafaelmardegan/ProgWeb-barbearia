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
    <title>Pampa Barber - Sobre</title>
     
    <link href="./cdn/bootstrap/css/bootstrap.min.css" rel="stylesheet">    
    <link href="./css/global.css" rel="stylesheet">
   <link href="./css/sobre.css" rel="stylesheet">
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
	      <li class="nav-item">
	        <a class="nav-link" href=".\servicos.php" >Serviços</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href=".\contato.php" >Contato</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href=".\sobre.php" >Sobre <span class="sr-only">(current)</span></a>
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
		<h4 style="text-align: center;" ><span class="titulo">Sobre nós!</span></h4>
		<h6 style="text-align: center;" > Nós somos a Pampa Barber, uma barbearia e loja de produtos que atende todo o território
			nacional, especializada em serviços, produtos e equipamentos profissionais para barbeiro.
			Nossa empresa vem fazendo um trabalho exclusivo de atendimento em
			todo o Brasil. Conheça abaixo os membros do nosso time:
		</h6>
	</div>
	<!-- ################ INÍCIO CONTEÚDO ################ -->
	<div class="container servicos">	
		<div class="cards1">			  
			<div class="card-deck">
				<div class="card">
				  <img class="card-img-top" src="./imagens/fotos/rafael.jpg" alt="Imagem de capa do card">
				  <center>
					  <div class="card-body">
						<h5 class="card-title text-center">Rafael Torres</h5>
						<p class="card-text">Especialista em Sobrancelhas.</p>
					  </div>
				  </center>

				  <div class="card-footer">
					<a class="btn btn-primary btn-block"  href="https://www.linkedin.com/in/rafaelbtorres/" role="button">Contatar</a>
				  </div>
				</div>


				<div class="card">
					<img class="card-img-top" src="./imagens/fotos/glener.jpg" alt="Imagem de capa do card">
					<center>
						<div class="card-body">
							<h5 class="card-title text-center">Glener Pizzolato</h5>
							<p class="card-text">Dermatologista responsável pelos tratamentos.</p>
						</div>
					</center>
					<div class="card-footer">
					  <a class="btn btn-primary btn-block"  href="https://www.linkedin.com/in/glener-pizzolato-6319821b0/" role="button">Contatar</a>
					</div>
				  </div>


				<div class="card">
				  <img class="card-img-top" src="./imagens/fotos/rafaelM.jpg" alt="Imagem de capa do card">
				  <center>
					<div class="card-body">
						<h5 class="card-title text-center">Rafael Mardegan</h5>
						<p class="card-text">Mardegan mãos de tesoura, o mito dos cortes!</p>
					</div>
				  </center>
				  <div class="card-footer">
					<a class="btn btn-primary btn-block"  href="https://www.facebook.com/rafael.mardegan.3" role="button">Contatar</a>
				  </div>
				</div>
				<div class="card">
				  <img class="card-img-top" src="./imagens/fotos/leo.jpg" alt="Imagem de capa do card">
				  <center>
				  <div class="card-body">
					<h5 class="card-title text-center">Leonardo Severo</h5>
					<p class="card-text"> Responsavel pelo setor financeiro.</p>
				  </div>
				  </center>
				  <div class="card-footer">
					<a class="btn btn-primary btn-block"  href="https://www.linkedin.com/in/leonardo-severo/" role="button">Contatar</a>
				  </div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<!-- ################ FIM CONTEÚDO ################ -->	
	<footer class="page-footer font-small">
	  <div class="footer-copyright text-center py-3">© 2021 Copyright:
	    <a href="#">Pampa Barber</a>
	  </div>
	</footer>	
	<script src="./cdn/jquery/jquery-3.4.1.min.js"></script>
    <script src="./cdn/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./js/sobre.js"></script>
</body>
</html>