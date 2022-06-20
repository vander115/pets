<?php 

require_once 'conexao.php'; 
				session_start();
				$id_tipo = $_SESSION['id_tipo'];
				$sql = "SELECT * FROM tb_tipos_produto WHERE id_tipo_prod = '$id_tipo';";
				$query = mysqli_query($conn, $sql);
				if ($query) {
					$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
				}
				$idquery = $row['id_tipo_prod'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $row['nome_tipo_prod']; ?></title>
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
					<li><a href="#" class="active amber-text text-darken-4 dropdown-trigger"
					data-target="dropdown-acess">Acessorios</a></li>
					<li><a href="#" class="amber-text text-darken-4 dropdown-trigger" data-target="dropdown-higi">Higiene</a></li>
					<li><a href="galeria.php" class="amber-text text-darken-4">Galeria</a></li>
					<li><a href="sobre.php" class=" amber-text text-darken-4">Sobre Nós</a></li>
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
					<li><a href="#">Caminhas</a></li>
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
		<li><div class="collapsible-header"><a href="conta.php" class="amber-text text-darken-4">Conta</a></div></li>
		<li class="no-padding">
			<ul class="collapsible collapsible-accordion ">
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
					<a href="#" class="active collapsible-header amber-text text-darken-4">Acessorios</a>
					<div class="collapsible-body">
						<ul>
							<li><a href="brinquedo.php">Brinquedos</a></li>	
							<li><a href="#">Vestiveis</a></li>
							<li><a href="#">Comedouros</a></li>
							<li><a href="#">Caminhas</a></li>
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
		<li><div class="collapsible-header"><a href="sobre.php" class="amber-text text-darken-4">Sobre Nós</a></div></li>
	</ul>
	
	<div class="pesqbar">
		<form action="" methode="GET">
			<div class="conteudo">
				<p style="font-family: 'Jost', sans-serif; font-weight:800; color:#311b92; margin: 0 7px 0 0;">Pesquisar:</p><input name ="busca" id="pesqbox" type="text" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>"><button class="btn-small btn-flat"><i id="iconpesq" class="material-icons">search</i></button>
			</div>
		</form>
	</div>
	<br>

	<div class="titulo"><h4><?php echo $row['nome_tipo_prod'];?></h4></div>
	<div class="fullcont">
		<div class="medcont">
		<?php
				if (isset($_GET['busca'])) {
					$pesquisa = mysqli_real_escape_string($conn, $_GET['busca']);
					$sql_pesquisa = "SELECT * 
                FROM tb_produto 
                WHERE tipo_prod = '$id_tipo' AND desc_prod LIKE '%$pesquisa%' 
                OR preco_prod LIKE '%$pesquisa%' AND tipo_prod = '$id_tipo';";
				}
				$sql = " SELECT * FROM tb_produto AS p JOIN tb_tipos_produto AS t ON p.tipo_prod = t.id_tipo_prod WHERE id_tipo_prod = '$idquery'; ";
				$query = mysqli_query($conn, $sql);
				if (isset($_GET['busca'])) {
					$query = mysqli_query($conn, $sql_pesquisa);
				} else {
					$query = mysqli_query($conn, $sql);
				}
				
				if ($query) {
					while ($prod = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
		?>
			
			<div class="respprod">
				<div class="imgdiv">
					<img class="imgprod" src="<?php echo $prod['img_prod_path']; ?>" alt="">
				</div>
				<p class="txtprod"><?php echo $prod['desc_prod']; ?></p>
				<p class="subprod"><?php echo 'R$' . $prod['preco_prod']; ?></p>
			</div>

			<?php
					}
				}
				if (isset($_GET['busca'])) {
					if (!mysqli_num_rows($query)) {
						echo '<div class="titulo"><h4>Produtos não encontrados</h4></div>';
					}
				}
			?>
		</div>
	</div>
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
      <a><img id="jellybeansfooter" src="../src/img/jellybeanslogo.svg" alt=""></a>
      </div>
    </div>
  </footer>
<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../nivo-slider/jquery.nivo.slider.js"></script>
<script src="http://areaaperta.com/nicescroll/js/jquery.nicescroll.min.js"></script>
<script src="../mod/js/main.js" type="text/javascript"></script>
</body>
</html>