<?php

require_once 'conexao.php';
if (!isset($_SESSION)) {
	session_start();
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sua Conta</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="../materialize/css/materialize.css" media="screen,projection" />
	<link rel="stylesheet" href="../mod/css/custom.css">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Jost:wght@500;700;800&display=swap');
	</style>
	<link rel="shorcut icon" href="../src/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="../nivo-slider/nivo-slider.css">
	<link rel="stylesheet" href="../nivo-slider/themes/default/default.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-image: url(../src/img/contabackground.png); background-repeat: repeat; background-attachment: fixed;
">

	<div class="navbar-fixed">
		<nav>
			<div class="nav-wrapper">
				<a href="index.php" class="brand-logo"><img id="logo" src="../src/img/petslogo.svg" class="responsive-img"></a>

				<a href="#" data-target="mobile-navbar" class="sidenav-trigger">
					<i class="material-icons amber-text text-darken-4">menu</i>
				</a>
				<ul id="navbar-items" class="right hide-on-med-and-down">
					<li><a href="index.php" class="amber-text text-darken-4">Ínicio</a></li>
					<li><a href="conta.php" class="active amber-text text-darken-4">Conta</a></li>
					<li><a href="#" class="amber-text text-darken-4 dropdown-trigger" data-target="dropdown-servicos">Serviços</a></li>
					<li><a href="#" class="amber-text text-darken-4 dropdown-trigger" data-target="dropdown-acess">Acessorios</a></li>
					<li><a href="#" class="amber-text text-darken-4 dropdown-trigger" data-target="dropdown-higi">Higiene</a></li>
					<li><a href="galeria.php" class="amber-text text-darken-4">Galeria</a></li>
					<li><a href="sobre.php" class="amber-text text-darken-4">Sobre Nós</a></li>
				</ul>

				<ul id="dropdown-servicos" class="dropdown-content">
					<li><a href="#">Filhotes</a></li>
					<li><a href="#">Banho e Tosa</a></li>
					<li><a href="#">Vacinação</a></li>
					<li><a href="#">Rações</a></li>
				</ul>

				<ul id="dropdown-acess" class="dropdown-content">
					<li><a href="brinquedo.php">Brinquedos</a></li>
					<li><a href="#">Vestiveis</a></li>
					<li><a href="#">Comedo-<br>uros</a></li>
					<li><a href="casinha.php">Caminhas</a></li>
					<li><a href="#">Diversos</a></li>
				</ul>

				<ul id="dropdown-higi" class="dropdown-content">
					<li><a href="#" style="font-size: 12px;">Shampoo e<br>Codicionador</a></li>
					<li><a href="#">Sabonetes</a></li>
					<li><a href="#">Perfumes</a></li>
					<li><a href="#">Higiene<br>Bucal</a></li>
				</ul>
			</div>
		</nav>
	</div>

	<!-- Menu Mobile -->
	<ul id="mobile-navbar" class="sidenav">
		<li>
			<div class="collapsible-header"><a href="index.php" class="amber-text text-darken-4">Ínicio</a></div>
		</li>
		<li>
			<div class="collapsible-header active"><a href="conta.php" class="active amber-text text-darken-4">Conta</a></div>
		</li>
		<li class="no-padding">
			<ul class="collapsible collapsible-accordion">
				<li>
					<a href="#" class="collapsible-header amber-text text-darken-4">Serviços</a>
					<div class="collapsible-body">
						<ul>
							<li><a href="#">Filhotes</a></li>
							<li><a href="#">Banho e Tosa</a></li>
							<li><a href="#">Vaninação</a></li>
							<li><a href="#">Rações</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</li>
		<li class="no-padding">
			<ul class="collapsible collapsible-accordion">
				<li>
					<a href="#" class="collapsible-header amber-text text-darken-4">Acessorios</a>
					<div class="collapsible-body">
						<ul>
							<li><a href="brinquedo.php">Brinquedos</a></li>
							<li><a href="#">Vestiveis</a></li>
							<li><a href="#">Comedouros</a></li>
							<li><a href="casinha.php">Caminhas</a></li>
							<li><a href="#">Diversos</a></li>
						</ul>
					</div>
				</li>

				<li class="no-padding">
					<ul class="collapsible collapsible-accordion">
						<li>
							<a href="#" class="collapsible-header amber-text text-darken-4">Higiene</a>
							<div class="collapsible-body">
								<ul>
									<li><a href="#">Shampoo e Codicionador</a></li>
									<li><a href="#">Sabonetes</a></li>
									<li><a href="#">Perfumes</a></li>
									<li><a href="#">Higiene Bucal</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</li>
		<li>
			<div class="collapsible-header"><a href="galeria.php" class="amber-text text-darken-4">Galeria</a></div>
		</li>
		<li>
			<div class="collapsible-header"><a href="sobre.php" class="amber-text text-darken-4">Sobre Nós</a></div>
		</li>
	</ul>

	<div class="pesqbar">
		<form action="" methode="GET">
			<div class="conteudo">
				<p style="font-family: 'Jost', sans-serif; font-weight:800; color:#311b92; margin: 0 7px 0 0;">Pesquisar:</p><input name="busca" id="pesqbox" type="text" value="<?php if (isset($_GET['busca'])) echo $_GET['busca']; ?>"><button class="btn-small btn-flat borda"><i id="iconpesq" class="material-icons">search</i></button>
			</div>
		</form>
	</div>

	<div class="fullcont">
		<img src="../src/img/adote2.png" alt="" class="responsive-img">
		<br>
		<div class="medcont">
			<div class="adote-card">
				<div class="img-adote-div"><img src="../src/img/adote2.png" alt="" class="img-adote"></div>
				<p class="det-adote">hfsidkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkfiusdgfusgsufgsffasdfsdfafsdfaff</p>
				<button class="btn-small borda btn-adote">Adotar</button>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="../nivo-slider/jquery.nivo.slider.js"></script>
	<script src="../mod/js/main.js" type="text/javascript"></script>
</body>

</html>