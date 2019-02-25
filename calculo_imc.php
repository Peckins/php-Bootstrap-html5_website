<meta charset="utf-8">
<meta name="viweport" content="width=device-width, intial-scale=1.0">

	<title>Exercícios</title>
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<!--Arquivo css da página.-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
<!--Barra de menu superior.-->
	<nav class="nav navbar-inverse">
		<ul class="nav navbar-nav">
			<li>
				<a class="navbar-brand" href="index.html">
					<label>Home</label>
				</a>				
			</li>			
		</ul>
	</nav>
	
	<?php
	// script para pegar os valores enviados através do POST.
		$peso=$_POST['peso'];
		$altura=$_POST['altura'];
	?>
	<!--Corpo da página.-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="jumbotron">
					<?php
					//Exibe os valores na página.
						echo "<h3>Cálculo de IMC</h3><br>";
						echo "<p>Seu IMC é:</p><br>";
						echo "<p>".$peso/($altura*$altura)."</p>";
					?>
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#calculoIMC">Calcular Novamente</button>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
	<!--Fim do corpo da página.-->
	
			<!--Janela de cálculo de IMC.-->
		<div id="calculoIMC" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<span class="glyphicon glyphicon-remove" id="modalClose" data-dismiss="modal"></span>
						<h4 class="modal-title">Calcular IMC</h4>
					</div>
									
					<div class="modal-body">
						<form action="calculo_imc.php" method="POST" class="form-group">
							<div class="row">
								<div class="col-md-12">
									<label>Peso(kg):</label><br>
									<input type="text" class="form-control" name="peso" placeholder="digite seu peso em quilogramas" required><br>
									<label>Altura(m):</label><br>	
									<input type="text" class="form-control" name="altura" placeholder="digite sua altura em metros" required><br>
									
									<hr>
									<input type="submit" class="btn btn-success" value="Calcular">
								</div>
							</div>
						</form>		
					</div>
					
				</div>
			</div>
		</div>
		<!--Fim da janela de cálculo de IMC.-->