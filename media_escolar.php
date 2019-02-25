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
		$n1=$_POST['nota1'];
		$n2=$_POST['nota2'];
		$n3=$_POST['nota3'];
		$n4=$_POST['nota4'];
		$n5=$_POST['nota5'];
	?>
	<!--Corpo da página.-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="jumbotron">
					<?php
					//Exibe os valores na página.
						echo "<h3>Média Escolar</h3><br>";
						echo "<p>Sua Média escolar é:</p><br>";
						echo "<p>".($n1 + $n2 + $n3 + $n4 + $n5) / 5 ."</p>";

					?>
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#mediaEscolar">Calcular Novamente</button>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
	<!--Fim do corpo da página.-->
	
	<!--Janela de Média Escolar.-->
		<div id="mediaEscolar" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<span class="glyphicon glyphicon-remove" id="modalClose" data-dismiss="modal"></span>
						<h4 class="modal-title">Média Escolar</h4>
					</div>
									
					<div class="modal-body">
						<form action="media_escolar.php" method="POST" class="form-group">
							<div class="row">
								<div class="col-md-12">
									<label>Primeira nota:</label><br>
									<input type="number" class="form-control" name="nota1" placeholder="nota do primeiro bimestre" required><br>
									<label>Segunda nota:</label><br>	
									<input type="number" class="form-control" name="nota2" placeholder="nota do segundo bimestre" required><br>
									<label>Terceira nota:</label><br>
									<input type="number" class="form-control" name="nota3" placeholder="nota do terceiro bimestre" required><br>
									<label>Quarta nota:</label><br>
									<input type="number" class="form-control" name="nota4" placeholder="nota do quarto bimestre" required><br>
									<label>Quinta nota:</label><br>
									<input type="number" class="form-control" name="nota5" placeholder="nota do quinto bimestre" required>
									<hr>
									<input type="submit" class="btn btn-success" value="Calcular">
								</div>
							</div>
						</form>		
					</div>
					
				</div>
			</div>
		</div>
		<!--Fim da Janela de Média Escolar.-->