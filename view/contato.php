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
    <title>Pampa Barber - Contato</title>
     
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="./css/global.css" rel="stylesheet">
   <link href="./css/contato.css" rel="stylesheet">
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
	      <li class="nav-item active">
	        <a class="nav-link" href=".\contato.php" >Contato <span class="sr-only">(current)</span></a>
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
		<h4 style="text-align: center;" ><span class="titulo">Contato</span></h4>
	</div>
	<!-- ################ INÍCIO CONTEÚDO ################ -->
	<div class="container">
			<div class="row">
				<div class="col-sm-6 text-right">
					<h5>Telefone <i class="fas fa-phone"></i></h5> 


					<h6>(55) 99999-9999</h6>
					<h6>(51) 99999-9999</h6>

					<h5>E-mail <i class="fas fa-envelope"></i></h5> 
					<h6>pampa-barber@gmail.com</h6>
						
				</div>
				<div class="col-sm-6 text-left">
					<h5>Horário de Atendimento <i class="fas fa-calendar-minus"></i></h5> 
					<h6>Seg a Sex de 8h às 19h</h6>
					<h6>Sábado de 8h às 12h</h6>

					<a href="http://facebook.com"> <i class="fab fa-facebook fa-2x"></i></a>
					<a href="http://instagram.com"> <i class="fab fa-instagram fa-2x"></i></a>
					<a href="http://linkedin.com"> <i class="fab fa-linkedin fa-2x"></i></a>

				</div>
			  </div>
	</div>
	<!-- ################ FIM CONTEÚDO ################ -->	
	<footer class="page-footer font-small">
	  <div class="footer-copyright text-center py-3">© 2021 Copyright:
	    <a href="#">Pampa Barber</a>
	  </div>
	</footer>	
	<script src="./cdn/jquery/jquery-3.4.1.min.js"></script>
    <script src="./cdn/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./js/contato.js"></script>
</body>
</html>