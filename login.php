<?php
	if(isset($_GET['erro'])){
		if($_GET['erro'] == "erroLogin"){
			$response = "Usuário ou senha incorretos, tente novamente.";			
		}else{
			$response = "É necessário realizar o login.";			
		}

	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pampa Barber - Login</title>
     
    <link href="./view/cdn/bootstrap/css/bootstrap.min.css" rel="stylesheet">    
    <link href="./view/css/global.css" rel="stylesheet">
   <link href="./view/css/login.css" rel="stylesheet">


   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
   <script>
	// window.location.href = "./view/home.html";
   </script>
</head>
<body>
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3>Pampa Barber</h3>
				</div>
				<div class="card-body" style="z-index: 500;">
					<form method="POST" action="./backend/controller/loginController.php">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="usuario" required class="form-control" placeholder="usuário">
							
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="senha" required class="form-control" placeholder="senha">
						</div>
						<div class="form-group">
							<input type="submit" value="Login" class="btn float-right login_btn">
						</div>
					</form>
				</div>
				<div class="card-footer">

					<div class="d-flex justify-content-center links">
						<img class="img-fluid" src="./view/imagens/home-intro.png" style="max-width: 47%; height: 50%;">

					</div>
					<div class="d-flex justify-content-center error">
						<div class="erro-login"><?php echo $response ?? '' ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</body>
</html>