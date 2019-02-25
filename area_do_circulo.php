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
		$conta=$_POST['raio'];
	?>
	<!--Corpo da página.-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="jumbotron">
					<?php
					//Exibe os valores na página.
						echo "<h3>Área do círculo</h3><br>";
						echo "<p>O raio do círculo é:</p><br>";
						echo "<p>".pi(3)*($conta*$conta)."</p>";
					?>
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#areaCirculo">Calcular Novamente</button>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
	<!--Fim do corpo da página.-->
	
	<!--Janela de cálculo da área do círculo.-->
		<div id="areaCirculo" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<span class="glyphicon glyphicon-remove" id="modalClose" data-dismiss="modal"></span>
						<h4 class="modal-title">Área do Círculo</h4>
					</div>
									
					<div class="modal-body">
						<form action="area_do_circulo.php" method="POST" class="form-group">
							<div class="row">
								<div class="col-md-12">
									<label>Raio do círculo:</label><br>
									<input type="number" class="form-control" name="raio" placeholder="digite o raio do círculo" required><br>
									
									<hr>
									<input type="submit" class="btn btn-success" value="Calcular">
								</div>
							</div>
						</form>		
					</div>
					
				</div>
			</div>
		</div>
		<!--Fim da janela de cálculo do círculo-->