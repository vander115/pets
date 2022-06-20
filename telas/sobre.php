<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sobre Nós</title>
	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="../mod/css/custom.css">
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Jost:wght@500;700;800&display=swap');
	</style>
	<link rel="shorcut icon" href="../src/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="../nivo-slider/nivo-slider.css">
	<link rel="stylesheet" href="../nivo-slider/themes/default/default.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image: url(../src/img/background.png); background-repeat: repeat; background-attachment: fixed;
">

	<div class="navbar-fixed">
		<nav>
			<div class="nav-wrapper">
				<a href="index.php" class="brand-logo"><img id="logo" src=" ../src/img/petslogo.svg" class="responsive-img"></a>

				<a href="#" data-target="mobile-navbar" class="sidenav-trigger">
					<i class="material-icons amber-text text-darken-4">menu</i>
				</a>
				<ul id="navbar-items" class="right hide-on-med-and-down">
					<li><a href="index.php" class="amber-text text-darken-4">Ínicio</a></li>
					<li><a href="conta.php" class="amber-text text-darken-4">Conta</a></li>
					<li><a href="#" class="amber-text text-darken-4 dropdown-trigger" data-target="dropdown-servicos">Serviços</a></li>
					<li><a href="#" class="amber-text text-darken-4 dropdown-trigger"
					data-target="dropdown-acess">Acessorios</a></li>
					<li><a href="#" class="amber-text text-darken-4 dropdown-trigger" data-target="dropdown-higi">Higiene</a></li>
					<li><a href="galeria.php" class="amber-text text-darken-4">Galeria</a></li>
					<li><a href="#" class="active amber-text text-darken-4">Sobre Nós</a></li>
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
		<li><div class="collapsible-header"><a href="index.php" class="amber-text text-darken-4">Ínicio</a></div></li>
		<li><div class="collapsible-header"><a href="conta.php" class="active amber-text text-darken-4">Conta</a></div></li>
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
							<li><a href="caminhas.php">Caminhas</a></li>
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
		<li><div class="collapsible-header"><a href="galeria.php" class="amber-text text-darken-4">Galeria</a></div></li>
		<li><div class="collapsible-header active"><a href="#" class="amber-text text-darken-4">Sobre Nós</a></div></li>
	</ul>
	
	<div style="width:100%; height:100vh;">
		<div class="row">
			<div id="petssobre" class="col s12 m12 l12">
				<div align="center"><img id="petslogosobre"src="../src/img/petslogobio.svg" alt=""></div>
				<div>
					<p class="txtsobre">Pets é um petshop que busca o bem-estar e a saúde dos animais, além de vender produtos de qualidade com transparência para o seu melhor amigo animal. Sempre buscamos inovar e se reinventar para atender aos nossos clientes do reino Animal. Agradecemos pela sua visita!</p>
		
				<ul>
						<li><a href="#" class="fa fa-instagram"></a><a class="white-text" href="#!">@pets_shop</a></li>
						<li><a href="#" class="fa fa-facebook"><a class="white-text" href="#!">Pets Petshop</a></li>
						<li><a href="#" class="fa fa-phone"><a class="white-text" href="#!">88 92123456</a></li>
						<li><a href="#" class="fa fa-envelope"><a class="white-text" href="#!">pets@email.com</a></li>
				</ul>
			</div>
		</div>
			<div id="jellysobre"class="col s12 m12 l12">
			<div align="center"><img id="jellylogosobre"src="../src/img/jellylogosobre.png" alt=""></div>
				<div>
					<p class="txtsobre">Jellybeans é uma empresa fictícia, criada pelos professores técnicos de informática: Augusto e Naisa, com o objetivo de criar projetos durante o 1º semestre do 3° ano. Essa empresa ficou com o projeto de uma Petshop e deve criar dois sistemas para o cliente fictício, incluindo esse site. jellybens é formada por 5 alunos do 3° ano técnico em informática: Airtalisson Nascimento, Gustavo Brito, Lara Menezes, Marcelino Marques e Vanderlei Furtuna.</p>
		
				<ul>
						<li><a href="https://www.instagram.com/airt4llison/" target="blank" class="fa fa-instagram"></a><a class="white-text" href="https://www.instagram.com/airt4llison/" target="blank">@airt4lisson</a></li>
						<li><a href="#https://www.instagram.com/laramenezes12/" target="blank" class="fa fa-instagram"><a class="white-text" href="https://www.instagram.com/laramenezes12/" target="blank" >@laramenezes12</a></li>
						<li><a href="https://www.instagram.com/marcelinomarques_/" target="blank" class="fa fa-instagram"><a class="white-text" href="https://www.instagram.com/marcelinomarques_/" target="blank">@marcelinomarques_</a></li>
						<li><a href="https://www.instagram.com/gustta_nasc/" target="blank" class="fa fa-instagram"><a class="white-text" href="https://www.instagram.com/gustta_nasc/" target="blank">@gustta_nasc</a></li>
						<li><a href="https://www.instagram.com/vander_suncat/"  target="blank" class="fa fa-instagram"><a class="white-text" href="https://www.instagram.com/vander_suncat/" target="blank">@vander_suncat</a></li>
				</ul>
			</div>
			</div>
		</div>
	</div>
<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../nivo-slider/jquery.nivo.slider.js"></script>
<script src="../mod/js/main.js" type="text/javascript"></script>
</body>
</html>