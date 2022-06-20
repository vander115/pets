<?php require_once 'protection.php'; ?>
<?php require_once '../conexao.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
	<!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../../materialize/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="../../mod/css/custom.css">
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Jost:wght@500;700;800&display=swap');
	</style>
	<link rel="shorcut icon" href="../../src/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="../../nivo-slider/nivo-slider.css">
	<link rel="stylesheet" href="../../nivo-slider/themes/default/default.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image: url(../../src/img/background.png); background-repeat: repeat; background-attachment: fixed;
">

<div class="navbar-fixed">
		<nav>
			<div class="nav-wrapper">
				<a href="#" class="brand-logo" disabled="disabled"><img id="logo" src="../../src/img/petslogo.svg" class="responsive-img"></a>

				<a href="#" data-target="mobile-navbar" class="sidenav-trigger">
					<i class="material-icons amber-text text-darken-4">menu</i>
				</a>
				<ul id="navbar-items" class="right hide-on-med-and-down">
					<li><a href="../index.php" class="amber-text text-darken-4">Ínicio</a></li>
					<li><a href="../conta.php" class="active amber-text text-darken-4">Conta</a></li>
					<li><a href="#" class="amber-text text-darken-4 dropdown-trigger" data-target="dropdown-servicos">Serviços</a></li>
					<li><a href="#" class="amber-text text-darken-4 dropdown-trigger"
					data-target="dropdown-acess">Acessórios</a></li>
					<li><a href="#" class="amber-text text-darken-4 dropdown-trigger" data-target="dropdown-higi">Higiene</a></li>
					<li><a href="../galeria.php" class="amber-text text-darken-4">Galeria</a></li>
					<li><a href="../sobre.php" class="amber-text text-darken-4">Sobre Nós</a></li>
				</ul>

				<ul id="dropdown-servicos" class="dropdown-content">
					<li><a href="#">Filhotes</a></li>
					<li><a href="#">Banho e Tosa</a></li>	
					<li><a href="#">Vacinação</a></li>
					<li><a href="../produtos.php?id=12">Rações</a></li>
				</ul>

				<ul id="dropdown-acess" class="dropdown-content">
					<li><a href="../produtos.php?id=1">Brinquedos</a></li>	
					<li><a href="../produtos.php?id=4">Vestiveis</a></li>
					<li><a href="../produtos.php?id=3">Comedo-<br>uros</a></li>
					<li><a href="../produtos.php?id=2">Caminhas</a></li>
					<li><a href="../produtos.php?id=10">Diversos</a></li>
				</ul>

				<ul id="dropdown-higi" class="dropdown-content">
					<li><a href="../produtos.php?id=11" style="font-size: 12px;">Shampoo e<br>Codicionador</a></li>	
					<li><a href="../produtos.php?id=8">Sabonetes</a></li>
					<li><a href="../produtos.php?id=7">Perfumes</a></li>
					<li><a href="../produtos.php?id=9">Higiene<br>Bucal</a></li>
				</ul>
			</div>
		</nav>
	</div>

	<!-- Menu Mobile -->
	<ul id="mobile-navbar" class="sidenav">
		<li><div class="collapsible-header active"><a href="../index.php" class="active amber-text text-darken-4">Ínicio</a></div></li>
		<li><div class="collapsible-header"><a href="../conta.php" class="amber-text text-darken-4">Conta</a></div></li>
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
							<li><a href="../produtos.php?id=1">Brinquedos</a></li>	
							<li><a href="../produtos.php?id=4">Vestiveis</a></li>
							<li><a href="../produtos.php?id=3">Comedouros</a></li>
							<li><a href="../produtos.php?id=2">Caminhas</a></li>
							<li><a href="../produtos.php?id=10">Diversos</a></li>
						</ul>
					</div>
				</li>
			
		<li class="no-padding">
			<ul class="collapsible collapsible-accordion">
				<li>	
					<a href="#" class="collapsible-header amber-text text-darken-4">Higiene</a>
					<div class="collapsible-body">
						<ul>
							<li><a href="../produtos.php?id=11">Shampoo e Codicionador</a></li>	
							<li><a href="../produtos.php?id=8">Sabonetes</a></li>
							<li><a href="../produtos.php?id=7">Perfumes</a></li>
							<li><a href="../produtos.php?id=9">Higiene Bucal</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</li>
			</ul>
		</li>
		<li><div class="collapsible-header"><a href="../galeria.php" class="amber-text text-darken-4">Galeria</a></div></li>
		<li><div class="collapsible-header"><a href="../sobre.php" class="amber-text text-darken-4">Sobre Nós</a></div></li>
	</ul>
	
	<div class="admbar">
		<div class="conteudo">
		<p class="titulo" style="font-family: 'Jost', sans-serif; font-size: 18px; font-weight:800; color:white; margin: 0 0 0 0;">Administrador</p>
		<i class="material-icons" style="color: white; margin: 0 10px 0 0;">stars</i></i>	
		<p style="font-family: 'Jost', sans-serif; font-size: 18px; font-weight:800; color:white; margin: 0 0 0 0;"><?php echo $_SESSION['name']; ?></p>
		
		</div>
		<a href="../logout.php" onclick="return confirm('Deseja realmente sair?');"class="btn-small logout borda" ><i class="material-icons left">directions_walk</i>Sair</a>
	</div>
	<!-- Modal Trigger -->
	
	<div class="fullcont">
		<div class="medcontadm">
		<div class="alter">
						
		     <?php
				$idAlt = $_GET['id'];
				$sql = "SELECT * FROM tb_produto WHERE id_prod = '$idAlt';";
				$query = mysqli_query($conn, $sql);
				if ($query) {
					while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
			?>

						<div class="cadprodalter">
							<h4>Alterar Produto</h4>
							<div class="preview">
								<img class="imgprod" src="<?php echo $row['img_prod_path_adm']?>" alt="">
							</div>
						</div>
						<br>
							<form enctype="multipart/form-data" method="POST" action="alterar.php?id=<?php echo $idAlt?>">
								<div class="form-field">
									<label for="desc">Descrição*</label>
									<div class="input-field">
										<input type="text" maxlength="200" name="desc_prod" value="<?php echo $row['desc_prod']?>">
									</div>
								</div>
								<div class="cadprodalter">
									<div class="form-field">
										<label for="preco">Preço (R$)*</label>
										<input type="text" onkeypress="return onlynumber();" name="preco_prod" value="<?php echo $row['preco_prod']?>">
									</div>
										<div class="form-field">
											<label for="descont">Tipo</label>
												<select name="tipo_prod">
													<option value="1" <?php if ($row['tipo_prod'] == 1) {echo 'selected';}?>>Brinquedos</option>
													<option value="2" <?php if ($row['tipo_prod'] == 2) {echo 'selected';}?>>Caminhas</option>
													<option value="3" <?php if ($row['tipo_prod'] == 3) {echo 'selected';}?>>Comedouros</option>
													<option value="4" <?php if ($row['tipo_prod'] == 4) {echo 'selected';}?>>Vestiveis</option>
													<option value="11" <?php if ($row['tipo_prod'] == 11) {echo 'selected';}?>>Shampoo e Condicionador</option>
													<option value="7" <?php if ($row['tipo_prod'] == 7) {echo 'selected';}?>>Perfumes</option>
													<option value="8" <?php if ($row['tipo_prod'] == 8) {echo 'selected';}?>>Sabonetes</option>
													<option value="9" <?php if ($row['tipo_prod'] == 9) {echo 'selected';}?>>Higiene Bucal</option>
													<option value="10" <?php if ($row['tipo_prod'] == 10) {echo 'selected';}?>>Diversos</option>
													<option value="12" <?php if ($row['tipo_prod'] == 12) {echo 'selected';}?>>Rações</option>
												</select>
										</div>
										<div class="form-fiel">
											<label for="">Imagem*</label>
											<div class="file-field input-field">
												<div class="btn borda">
													<span>JPG/PNG</span>
													<input type="file" name="img_alter">
												</div>
												<div class="file-path-wrapper">
													<input class="file-path validate" type="text" name="txt_img">
												</div>
											</div>
									</div>
								</div>
								<div class="form-field">
									<label for="">Quantidade*</label>
									<input type="text" name="qtd_prod" id="" onkeypress="return onlynumber();" value="<?php echo $row['qtd_prod'];?>">
								</div>
								<div class="form-field">
								<br>
								<div class="form-field">
									<a class="btn  amber darken-4 borda" href="tela_listar.php"><i class="material-icons left white-text">chevron_left</i>Voltar</a>
									<button onclick = "return confirm('Deseja realmente alterar?');" class="btn roxo borda"><i class="material-icons left white-text">create</i>Alterar</button>
									<a class="btn red accent-4 borda" onclick = "return confirm('Deseja realmente excluir?');" href="excluir_produto.php?id=<?php echo $_GET['id'];?>"><i class="material-icons left white-text">clear</i>Excluir</a>
									
								</div>
							</form>
							<?php }}?>
						</div>
						
					</div><br>
		</div>
	</div>


<script type="text/javascript" src="../../materialize/js/materialize.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../../nivo-slider/jquery.nivo.slider.js"></script>
<script src="../../mod/js/main.js" type="text/javascript"></script>
</body>
</html>