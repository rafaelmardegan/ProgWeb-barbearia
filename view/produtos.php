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
    <title>Pampa Barber - Produtos</title>
     
    <link href="./cdn/bootstrap/css/bootstrap.min.css" rel="stylesheet">    
    <link href="./css/global.css" rel="stylesheet">
   <link href="./css/produtos.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
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
	      <li class="nav-item active">
	        <a class="nav-link" href=".\produtos.php">Produtos <span class="sr-only">(current)</span></a>
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
	<div id="carousel-Produtos" class="carousel slide carousel-fade" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
	    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active"  style="transition: transform 2s ease, opacity .8s ease-out">
	      <img src="./imagens/produtos/carousel1.jpg"  class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h1 class="caption slide-1 text-danger">50% OFF!</h1>
	        <p>Kit Barba e Cabelo Hidratação Profissional Completa</p>
	      </div>
	    </div>
	    <div class="carousel-item" style="transition: transform 2s ease, opacity .8s ease-out">
	      <img src="./imagens/produtos/carousel2.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h1 class=" caption slide-2 text-danger">35% OFF!</h1>
	        <p>Super Gel cola For Men Profissional</p>
	      </div>
	    </div>
	    <div class="carousel-item" style="transition: transform 2s ease, opacity .8s ease-out">
	      <img src="./imagens/produtos/carousel3.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block">
	        <h1 class="caption slide-3 text-danger"> 15% OFF!</h1>
	        <p>Shampoo DELION Homem 3 em 1</p>
	      </div>
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carousel-Produtos" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carousel-Produtos" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<div class="container">
		<div class="container">
			<a class="btn btn-dark btn-form-cadastro-produtos" onclick="toggleForm();">
				<i class="bi bi-plus-circle"></i>
				Cadastrar produtos
			</a>
		</div>
		<div class="container container-cadastro-produtos">
			<form>
			  <div class="form-row">
			    <div class="col-md-5 mb-3">
			      <label for="descricao-produto">Descrição</label>
			      <input type="text" class="form-control bg-dark text-light" id="descricao-produto" placeholder="Descrição do produto" required>
			    </div>
			    <div class="col-md-3 mb-3">
			      <label for="preco-produto">Preço</label>
			      <div class="input-group">
			        <div class="input-group-prepend">
			          <span class="input-group-text bg-dark text-light" id="inputGroupPrepend2">R$</span>
			        </div>
			        <input type="text" class="form-control bg-dark text-light" id="preco-produto" placeholder="Preço do produto" aria-describedby="inputGroupPrepend2" required>
			      </div>
			    </div>
			    <div class="col-md-4 mb-3">
			    	<label for="validationDefaultUsername">Imagem</label>
			    	<div class="custom-file">
			    	  <input type="file" class="custom-file-input bg-dark text-light" name="img" required id="customFile">
			    	  <label class="custom-file-label bg-dark" id="label-img" for="customFile">Escolher arquivo</label>
			    	</div>
			    </div>
			  </div>
			  <div class="row row-alertas">
				  <div class="col-12">
				   <div class="alert alert-danger" role="alert">
				     Preencha os campos corretamente.
				     <button type="button" onclick="closeAlertForm();" class="close">
				       <span aria-hidden="true">&times;</span>
				     </button>
				   </div>
				   <div class="alert alert-success" role="alert">
				     Produto cadastrado com sucesso!
				     <button type="button" onclick="closeAlertForm();" class="close">
				       <span aria-hidden="true">&times;</span>
				     </button>
				   </div>
				</div>		  	
			  </div>
			  <div class="row row-btn-enviar">
			  	<button class="btn btn-outline-dark btn-block" type="button" onclick="adicionar();" id="btn-cadastrar" >Enviar
			  	</button>
			  </div>
			</form>

		</div>
		<div class="row row-produtos" >
		<!-- <div class="card" >
		  <img src="./imagens/produtos/produto1.jpg" class="card-img-top img-card" alt="...">
		  <div class="card-body" >
		    <h5 class="card-title">Shampoo de barba</h5>
		    <h5 class="valor-card">R$ 129,90</h5>
		    <a href="#" class="btn btn-success btn-block btn-card">COMPRAR</a>
		  </div>
		</div>
		<div class="card">
		  <img src="./imagens/produtos/produto2.jpg" class="card-img-top img-card" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Cera de Cabelo</h5>
		    <h5 class="valor-card">R$ 85,99</h5>
		    <a href="#" class="btn btn-success btn-block btn-card">COMPRAR</a>
		  </div>
		</div>
		<div class="card" >
		  <img src="./imagens/produtos/produto3.jpg" class="card-img-top img-card" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Shampoo de barba</h5>
		    <h5 class="valor-card">R$ 129,90</h5>
		    <a href="#" class="btn btn-success btn-block btn-card">COMPRAR</a>
		  </div>
		</div>

		<div class="card" >
		  <img src="./imagens/produtos/produto4.jpg"  class="card-img-top img-card" alt="...">
		  <div class="card-body" >
		    <h5 class="card-title">Pomada modeladora</h5>
		    <h5 class="valor-card">R$ 99,50</h5>
		    <a href="#" class="btn btn-success btn-block btn-card">COMPRAR</a>
		  </div>
		</div>
		<div class="card">
		  <img src="./imagens/produtos/produto5.jpg"  class="card-img-top img-card" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Cera Cabelo</h5>
		    <h5 class="valor-card">R$ 129,90</h5>
		    <a href="#" class="btn btn-success btn-block btn-card">COMPRAR</a>
		  </div>
		</div>
		<div class="card" >
		  <img src="./imagens/produtos/produto6.png" class="card-img-top img-card" alt="...">
		  <div class="card-body" >
		    <h5 class="card-title">Shampoo de barba</h5>
		    <h5 class="valor-card">R$ 129,90</h5>
		    <a href="#" class="btn btn-success btn-block btn-card">COMPRAR</a>
		  </div>
		</div>
		<div class="card" >
		  <img src="./imagens/produtos/produto7.png" class="card-img-top img-card" alt="...">
		  <div class="card-body" >
		    <h5 class="card-title">Aparador de Barba</h5>
		    <h5 class="valor-card">R$ 129,90</h5>
		    <a href="#" class="btn btn-success btn-block btn-card">COMPRAR</a>
		  </div>
		</div>
		<div class="card" >
		  <img src="./imagens/produtos/produto8.jpg" class="card-img-top img-card" alt="...">
		  <div class="card-body" >
		    <h5 class="card-title">Aparador de Barba</h5>
		    <h5 class="valor-card">R$ 142,90</h5>
		    <a class="btn btn-success btn-block btn-card">COMPRAR</a>
		  </div>
		</div>				 -->
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
    <script src="./js/produtos.js"></script>
</body>
</html>