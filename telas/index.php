<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio</title>
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
				<a href="#" class="brand-logo" disabled="disabled"><img id="logo" src="../src/img/petslogo.svg" class="responsive-img"></a>

				<a href="#" data-target="mobile-navbar" class="sidenav-trigger">
					<i class="material-icons amber-text text-darken-4">menu</i>
				</a>
				<ul id="navbar-items" class="right hide-on-med-and-down">
					<li><a href="#" class="active amber-text text-darken-4">Ínicio</a></li>
					<li><a href="conta.php" class="amber-text text-darken-4">Conta</a></li>
					<li><a href="#" class="amber-text text-darken-4 dropdown-trigger" data-target="dropdown-servicos">Serviços</a></li>
					<li><a href="#" class="amber-text text-darken-4 dropdown-trigger"
					data-target="dropdown-acess">Acessórios</a></li>
					<li><a href="#" class="amber-text text-darken-4 dropdown-trigger" data-target="dropdown-higi">Higiene</a></li>
					<li><a href="galeria.php" class="amber-text text-darken-4">Galeria</a></li>
					<li><a href="sobre.php" class="amber-text text-darken-4">Sobre Nós</a></li>
				</ul>

				<ul id="dropdown-servicos" class="dropdown-content">
					<li><a href="#">Adoção de Filhotes</a></li>
					<li><a href="#">Banho e Tosa</a></li>	
					<li><a href="#">Vacinação</a></li>
					<li><a href="#">Rações</a></li>
				</ul>

				<ul id="dropdown-acess" class="dropdown-content">
					<li><a href="produtos.php?id=1">Brinquedos</a></li>	
					<li><a href="produtos.php?id=4">Vestiveis</a></li>
					<li><a href="produtos.php?id=3">Comedo-<br>uros</a></li>
					<li><a href="produtos.php?id=2">Caminhas</a></li>
					<li><a href="produtos.php?id=10">Diversos</a></li>
				</ul>

				<ul id="dropdown-higi" class="dropdown-content">
					<li><a href="produtos.php?id=11" style="font-size: 12px;">Shampoo e<br>Codicionador</a></li>	
					<li><a href="produtos.php?id=8">Sabonetes</a></li>
					<li><a href="produtos.php?id=7">Perfumes</a></li>
					<li><a href="produtos.php?id=9">Higiene<br>Bucal</a></li>
				</ul>
			</div>
		</nav>
	</div>

	<!-- Menu Mobile -->
	<ul id="mobile-navbar" class="sidenav">
		<li><div class="collapsible-header active"><a href="#" class="active amber-text text-darken-4">Ínicio</a></div></li>
		<li><div class="collapsible-header"><a href="conta.php" class="amber-text text-darken-4">Conta</a></div></li>
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
					<a href="#" class="collapsible-header amber-text text-darken-4">Acessórios</a>
					<div class="collapsible-body">
						<ul>
							<li><a href="produtos.php?id=1">Brinquedos</a></li>	
							<li><a href="produtos.php?id=4">Vestiveis</a></li>
							<li><a href="produtos.php?id=3">Comedouros</a></li>
							<li><a href="produtos.php?id=2">Caminhas</a></li>
							<li><a href="produtos.php?id=10">Diversos</a></li>
						</ul>
					</div>
				</li>
			
		<li class="no-padding">
			<ul class="collapsible collapsible-accordion">
				<li>	
					<a href="#" class="collapsible-header amber-text text-darken-4">Higiene</a>
					<div class="collapsible-body">
						<ul>
							<li><a href="produtos.php?id=11">Shampoo e Codicionador</a></li>	
							<li><a href="produtos.php?id=8">Sabonetes</a></li>
							<li><a href="produtos.php?id=7">Perfumes</a></li>
							<li><a href="produtos.php?id=9">Higiene Bucal</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</li>
			</ul>
		</li>
		<li><div class="collapsible-header"><a href="galeria.php" class="amber-text text-darken-4">Galeria</a></div></li>
		<li><div class="collapsible-header"><a href="sobre.php" class="amber-text text-darken-4">Sobre Nós</a></div></li>
	</ul>
	
	<div id="slider" class="nivoSlider theme-default">
		<img src="../src/img/cachorros1.png" alt="">
		<img src="../src/img/gatos1.png" alt="">
		<img src="../src/img/passaros1.png" alt="">
		<img src="../src/img/cachorros2.png" alt="">
		<img src="../src/img/gatos2.png" alt="">
		<img src="../src/img/passaros2.png" alt="">
		<img src="../src/img/cachorros3.png" alt="">
		<img src="../src/img/gatos3.png" alt="">
		<img src="../src/img/passaros3.png" alt="">
		<img src="../src/img/cachorros4.png" alt="">
		<img src="../src/img/gatos4.png" alt="">
		<img src="../src/img/passaros4.png" alt="">
	</div>
	<br>
	
	<div class="titulo"><h4>SERVIÇOS</h4></div>
	<div class="cont">
		<div class="resp">
			<a href="#">
				<p class="cardit">Filhotes</p>
				<div align="center"><img id="fil" class="cardimg" src="../src/img/filhotes.svg" alt=""></div>
				<p class="cardtext">Adote o seu mais novo amigo!</p>
			</a>
		</div>
		<div class="resp">
			<a href="#">
				<p class="cardit">Banho e Tosa</p>
				<div align="center"><img id="banho" class="cardimg" src="../src/img/banho.svg" alt=""></div>
				<p class="cardtext">Deixe o seu animal limpinho!</p>
			</a>
		</div>
		<div class="resp">
			<a href="#">
				<p class="cardit">Vacinação</p>
				<div align="center"><img id="vac" class="cardimg" src="../src/img/vac.svg" alt=""></div>
				<p class="cardtext">A proteção do seu Pet também é importante!</p>
			</a>

		</div>
		<div class="resp">
			<a href="#">
				<p class="cardit">Rações</p>
				<div align="center"><img id="rac" class="cardimg" src="../src/img/racao.svg" alt=""></div>
				<p class="cardtext">Barriga cheia com qualidade!</p>
			</a>
		</div>
	</div>
	<br>
	<div class="racas">
		<h4>RAÇAS</h4>
		<br>
		<hr color="white">
		<div class="racashover">
			<p id="subracas">Cachorros:</p>
			<div class="cont sub">
				<div class="imgracas">
					<div align="center"><img class="circle" src="../src/img/cachorro/huskysiberiano.jpeg" alt=""></div>
					<p class="txtracas">Husky</p>
				</div>
			
				<div class="imgracas">
					<div align="center"><img class="circle" src="../src/img/cachorro/lulu.jpeg" alt=""></div>
					<p class="txtracas">Lulu</p>
				</div>
			
				<div class="imgracas">
					<div align="center"><img class="circle" src="../src/img/cachorro/boder-collie.jpg" alt=""></div>
					<p class="txtracas" style="font-size: 18px;">Boder-Collie</p>
				</div>
			
				<div class="imgracas">
					<div align="center"><img class="circle" src="../src/img/cachorro/maltes.jpg" alt=""></div>
					<p class="txtracas">Maltes</p>
				</div>
			
				<div class="imgracas">
					<div align="center"><img class="circle" src="../src/img/cachorro/pitbull.jpg" alt=""></div>
					<p class="txtracas">Pitbull</p>
				</div>
			
				<div class="imgracas">
					<div align="center">
						<img class="circle" src="../src/img/cachorro/rottweiler.jpg" alt="">
					</div>
					<p class="txtracas">Rottweiler</p>
				</div>
			
				<div class="imgracas">
					<div align="center"><img class="circle" src="../src/img/cachorro/yourkshire.jpeg" alt=""></div>
					<p class="txtracas">Yourkshire</p>
				</div>
			</div>
			<br>
		</div>
		<hr color="white">
		<div class="racashover">
			<p id="subracas">Gatos:</p>
			<div class="cont sub">
				<div class="imgracas">
					<div align="center"><img class="circle" src="../src/img/gatos/gato-comum.jpg" alt=""></div>
					<p class="txtracas">Comum</p>
				</div>
			
				<div class="imgracas">
					<div align="center"><img class="circle" src="../src/img/gatos/gato-persa.jpg" alt=""></div>
					<p class="txtracas">Persa</p>
				</div>
			
				<div class="imgracas">
					<div align="center"><img class="circle" src="../src/img/gatos/american-bobtail.jpg" alt=""></div>
					<p class="txtracas">Bobtail</p>
				</div>
			
				<div class="imgracas">
					<div align="center"><img class="circle" src="../src/img/gatos/birmanes.jpg" alt=""></div>
					<p class="txtracas">Birmanês</p>
				</div>
			
				<div class="imgracas">
					<div align="center"><img class="circle" src="../src/img/gatos/britsh.jpg" alt=""></div>
					<p class="txtracas">Britsh</p>
				</div>
			
				<div class="imgracas">
					<div align="center">
						<img class="circle" src="../src/img/gatos/siberiano.jpg" alt="">
					</div>
					<p class="txtracas">Siberiano</p>
				</div>
			
				<div class="imgracas">
					<div align="center"><img class="circle" src="../src/img/gatos/tonquines.jpg" alt=""></div>
					<p class="txtracas">Tonquinês</p>
				</div>
			</div>
			<br>
		</div>
			<hr color="white">
			<div class="racashover">
				<p id="subracas">Passáros:</p>
						<div class="cont sub">
				<div class="imgracas">
					<div align="center"><img class="circle" src="../src/img/passaros/arara-caninde.jpg" alt=""></div>
					<p class="txtracas" style="font-size: 16px;">Arara Canindê</p>
				</div>
				
				<div class="imgracas">
					<div align="center"><img class="circle" src="../src/img/passaros/jandaia.jpg" alt=""></div>
					<p class="txtracas">Jandaia</p>
				</div>
				
				<div class="imgracas">
					<div align="center"><img class="circle" src="../src/img/passaros/periquito-autraliano.jpg" alt=""></div>
					<p class="txtracas" >Periquito</p>
				</div>
				
				<div class="imgracas">
					<div align="center"><img class="circle" src="../src/img/passaros/calopsita.jpg" alt=""></div>
					<p class="txtracas">Calopsita</p>
				</div>
				
				<div class="imgracas">
					<div align="center"><img class="circle" src="../src/img/passaros/papagaio.jpg" alt=""></div>
					<p class="txtracas">Papagaio</p>
				</div>
				
				<div class="imgracas">
					<div align="center">
						<img class="circle" src="../src/img/passaros/galo-de-campina.jpg" alt="">
					</div>
					<p class="txtracas" style="font-size: 13px; margin: 8px 0 0 0;">Galo de Campina</p>
				</div>
				
				<div class="imgracas">
					<div align="center"><img class="circle" src="../src/img/passaros/canario-belga.jpg" alt=""></div>
					<p class="txtracas">Canario</p>
				</div>
			</div>
		</div>
		<br>
	</div>
	<br>
		<img src="../src/img/bannerfinal.png" class="responsive-img"alt="">
	<br>
	<br>

<footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <img id="petslogobio"src="../src/img/petslogobio.svg" alt="">
          <p class="grey-text text-lighten-4">Pets é um petshop que visa o melhor atendimento e os melhoress produtos para o seu animal de estimação. Além disso, aqui insentivamos a adoção de animais. Seu pet em boas patas!</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Suporte</h5>
          <ul>
            <li><a class="white-text" href="#!">Atendimento ao Cliente</a></li>
            <li><a class="white-text" href="#!">Ajuda</a></li>
            <li><a class="white-text" href="#!">Feedback</a></li>
            <li><a class="white-text" href="sobre.php">Sobre Nós</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Contatos</h5>
          <ul>
            <li><a href="#" class="fa fa-instagram" disabled="disabled"></a><a class="white-text" href="#!" disabled="disabled">@pets_shop</a></li>
            <li><a href="#" class="fa fa-facebook" disabled="disabled"><a class="white-text" href="#!" disabled="disabled">Pets Petshop</a></li>
            <li><a href="#" class="fa fa-phone" disabled="disabled"><a disabled="disabled" class="white-text" href="#!">88 92123456</a></li>
            <li><a href="#" class="fa fa-envelope" disabled="disabled"><a disabled="disabled" class="white-text" href="#!">pets@email.com</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      <a><img id="jellybeansfooter" src="../src/img/jellybeanslogo.png" alt=""></a>
      </div>
    </div>
  </footer>
<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="http://areaaperta.com/nicescroll/js/jquery.nicescroll.min.js"></script>
<script src="../nivo-slider/jquery.nivo.slider.js"></script>
<script src="../mod/js/main.js" type="text/javascript"></script>
</body>
</html>