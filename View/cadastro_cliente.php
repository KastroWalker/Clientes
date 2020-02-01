<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Sistema de Gerênciamento de Clientes">
		<meta name="author" content="Victor Castro">
		<title>Cadastro Cliente</title>

		<!-- Importando Bootstrap -->
		<link href="../lib/css/bootstrap.min.css" rel="stylesheet">
		<!-- Importando o estilo da página -->
		<link href="../lib/css/dashboard.css" rel="stylesheet">

		<style>
			.bd-placeholder-img {
				font-size: 1.125rem;
				text-anchor: middle;
			}

			@media (min-width: 768px) {
				.bd-placeholder-img-lg {
				  font-size: 3.5rem;
				}
			}
		</style>

	</head>
  	<body>
		<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
			<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Minha Empresa</a>
			<ul class="navbar-nav px-3">
				<li class="nav-item text-nowrap">
				  <a class="nav-link" href="#">Sair</a>
				</li>
			</ul>
		</nav>

		<div class="container-fluid">
			<div class="row">
				<nav class="col-md-2 d-none d-md-block bg-light sidebar">
					<div class="sidebar-sticky">
						<ul class="nav flex-column">
							<li class="nav-item">
								<a class="nav-link active" href="../index.php">
									<span data-feather="home"></span>
									Dashboard <span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="clientes.php">
									<span data-feather="file"></span>
									Clientes
								</a>
							</li>
						</ul>
					</div>
				</nav>

				<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
					<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
						<h1 class="h2">Cadastro Cliente</h1>
					</div>

					<div>
						<form method="get" action=".">
							<!--div class="form-group">
								<label for="">ID: </label>
								<input type="text" class="form-control" id="" name="">
							</div>

							<div class="form-group">
								<label for="">Nome: </label>
								<input type="text" class="form-control" id="" name="">
							</div>

							<div class="form-group">
								<label for="">Email: </label>
								<input type="text" class="form-control" id="" name="">
							</div>

							<div class="form-group">
								<label for="">CPF: </label>
								<input type="text" class="form-control" id="" name="">
							</div-->

							<div class="endereco">
								<h4>Endereço</h4>

								<div class="form-group">
									<label>Cep:</label>
									<input name="cep" type="text" id="cep" value="" size="10" maxlength="9" class="form-control" onblur="pesquisacep(this.value);">
								</div>
								
								<div class="form-group">
									<label>Rua:</label>
									<input name="rua" type="text" id="rua" size="60" class="form-control">
								</div>
								
								<div class="form-group">
									<label>Número:</label>
									<input name="num_casa" type="text" id="num" class="form-control">
								</div>

								<div class="form-group">
									<label>Bairro:</label>
									<input name="bairro" type="text" id="bairro" size="40" class="form-control">
								</div>
								
								<div class="form-group">
									<label>Cidade:</label>
									<input name="cidade" type="text" id="cidade" size="40" class="form-control">
								</div>
								
								<div class="form-group">
									<label>Estado:</label>
									<input name="uf" type="text" id="uf" size="2" class="form-control">
								</div>
							</div>
						</form>
					</div>
				</main>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	  	
	  	<script>window.jQuery || document.write('<script src="../lib/js/jquery-slim.min.js"><\/script>')</script>
	  	<script src="../lib/js/bootstrap.bundle.min.js"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
		
		<script src="../lib/js/dashboard.js"></script>

		<script src="../lib/js/geraCep.js"></script>
	</body>
</html>