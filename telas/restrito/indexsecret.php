<?php require_once 'protection.php'; 
	if (!isset($_SESSION)) {
		session_start();
	}
	if ($_SESSION['tipo'] != 'Secretário') {
		die('
     <script>
        alert("Somente Secretários podem acessar essa página!");
        window.location = "../conta.php";
        </script>
     ');
	}
?>
<?php require_once '../conexao.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Secretário</title>
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
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
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
		<p class="titulo" style="font-family: 'Jost', sans-serif; font-size: 18px; font-weight:800; color:white; margin: 0 0 0 0;">Secretário</p>
		<i class="material-icons" style="color: white; margin: 0 10px 0 0;">assistant</i></i>	
		<p style="font-family: 'Jost', sans-serif; font-size: 18px; font-weight:800; color:white; margin: 0 0 0 0;"><?php echo $_SESSION['name']; ?></p>
		
		</div>
		<a href="../logout.php" onclick="return confirm('Deseja realmente sair?');"class="btn-small logout borda" ><i class="material-icons left">directions_walk</i>Sair</a>
	</div>
	<!-- Modal Trigger -->
	<br>
	<div class="titulo"><h4>Painel do Secretário</h4></div>
	<div class="fullcont">
	<?php 
					$id_user = $_SESSION['user_pet'];
					$sql_user = "SELECT * FROM tb_user WHERE id_user = '$id_user' ORDER BY tipo_user, nome_user;";
					$query_user = mysqli_query($conn, $sql_user);
					$user = mysqli_fetch_array($query_user, MYSQLI_ASSOC);
				?>
			<div id="modal<?php echo $user['id_user']; ?>" class="modal">
				<div class="modal-content">
					<form action="alterar_user.php" method="POST">
						<div class="cadprod">
							<input type="hidden" name="id_user" value="<?php echo $user['id_user']; ?>">
							<!--<input type="hidden" name="tipo_user" value="<?php echo $user['tipo_user']; ?>">-->
							<div class="form-duo">
								<label for="desc">Nome*</label>
								<input type="text" name="nome_user" value="<?php echo $user['nome_user']; ?>">
							</div>
							<div class="form-duo">
								<label for="">Sobrenome</label>
								<input type="text" name="sobrenome_user" value="<?php echo $user['sobnome_user']; ?>">
							</div>
						</div>
						<br>
						<div class="cadprod">
							<div class="form-duo">
								<label for="desc">Usuario*</label>
								<input type="text" name="login_user" value="<?php echo $user['login_user']; ?>">
							</div>
							<br>
							<div class="form-duo">
								<label for="desc">Senha*</label>
								<input type="password" name="pass_user" value="<?php echo $user['pass_user']; ?>">
							</div>
						</div>
						<br>
						<div class="cadprod">
							<div class="form-duo">
							<label for="">Endereço</label>
							<input type="text" name="end_user" value="<?php echo $user['end_user']; ?>"></input>
							</div>
						</div>
						<br>
						<div class="cadprod">
							<div class="form-duo">
								<label for="">Tipo</label>
								<label>
									<label>
									<input class="with-gap" name="tipo_user" type="radio"  value="Cliente" <?php if($user['tipo_user'] == "Cliente"){echo 'checked';} ?>/>
									<span>Cliente</span>
									</label>
									<label>
									<input class="with-gap" name="tipo_user" type="radio" value="Secretário" <?php if($user['tipo_user'] == "Secretário"){echo 'checked';} ?> />
									<span style="margin: 0 0 0 15px;">Secretário</span>
									</label>
									<label>
									<input class="with-gap" name="tipo_user" type="radio" value="Admin" <?php if($user['tipo_user'] == "Admin"){echo 'checked';} ?> />
									<span style="margin: 0 0 0 15px;">Admin</span>
									</label>
								</label>
							</div>
						</div>
						<br>
						<div class="form-field">
							<a class="btn  amber darken-4 borda modal-close" href="#"><i class="material-icons left white-text">chevron_left</i>Voltar</a>
							<button onclick = "return confirm('Deseja realmente alterar?');" class="btn roxo borda"><i class="material-icons left white-text">create</i>Alterar</button>
						</div>
					</form>
				</div>
			</div>

			<div class="modal" id="modal-pet<?php echo $user['id_user']; ?>">
						<div class="modal-content">
						<form enctype="multipart/form-data" action="pet.php" method="POST">
							<div class="cadprod">
								<input type="hidden" name="id_dono" value="<?php echo $user['id_user'];?>">
								<div class="form-duo_pet">
									<label for="desc">Nome*</label>
									<input type="text" name="nome_pet">
								</div>
							</div>
							<br>
							<div class="cadprod">
								<div class="form-duo_pet">
								<label for="descont">Tipo*</label>
												<select class="browser-default" name="tipo_pet">
													<option value="Cachorro">Cachorro</option>
													<option value="Gato">Gato</option>
													<option value="Papagaio">Papagaio</option>
												</select>
								</div>
								<div class="form-duo_pet">
									<label for="desc">Raça*</label>
									<input type="text" name="raca_pet">
								</div>
								<br>
								<div class="form-duo_pet">
									<label for="desc">Tamanho(m)</label>
									<input type="text" name="tam_pet">
								</div>
							</div>
							<br>
							<div class="cadprod">
								<div class="form-duo_pet">
									<label for="">Idade</label>
									<input type="text" name="idade_pet"></input>
								</div>
								<div class="form-duo_pet">
									<label for="descont">Peso(Kg)</label>
									<input type="text" name="peso_pet">
								</div>
								<div class="form-duo">
											<label for="">Imagem*</label>
											<div class="file-field input-field">
												<div class="btn">
													<span>jpg/png</span>
													<input type="file" name="img_pet">
												</div>
												<div class="file-path-wrapper">
													<input class="file-path validate" type="text">
												</div>
											</div>
									</div>
							</div>
							<br>
							<div class="form-field">
								<button class="btn amber darken-4 borda">Cadrastar</button>
							</div>
						</form>
						</div>
					</div>

		<div class="medcontadm">
			<ul class="collapsible borda blur">
			<li>
				 <div class="collapsible-header"><i style="color: #311b92;" class="material-icons" title="<?php 
                                if ($user['tipo_user']=='Admin') {
                                    echo 'Administrador';
                                }else if ($user['tipo_user']=='Secretário') {
                                    echo 'Secretário';
                                }else if ($user['tipo_user']=='Cliente') {
                                    echo 'Cliente';
                                }
                            ?>">
                        <?php 
                                if ($user['tipo_user']=='Admin') {
                                    echo 'stars';
                                }else if ($user['tipo_user']=='Secretário') {
                                    echo 'assistant';
                                }else if ($user['tipo_user']=='Cliente') {
                                    echo 'person';
                                }
                            ?>
                        </i>
                        <label>Meu Perfil: <?php echo $user['nome_user'] . ' ' . $user['sobnome_user'];?></label></div>
						<div class="collapsible-body">
 
				  <table>
						  <thead>
							<tr>
								<th>ID</th>
								<th>Login</th>
								<th>Senha</th>
								<th>Alterar</th>
								<th>Cad. Pet</th>
							</tr>
						  </thead>

						  <tbody>
							<tr>
								<td><p><?php echo $user['id_user']; ?></p></td>
								<td><p><?php echo $user['login_user']; ?></p></td>
								<td><p><?php echo $user['pass_user']; ?></p></td>
								<td><p><a class="btn borda modal-trigger" href="#modal<?php echo $user['id_user'];?>"><i style="color:#fff;"class="material-icons">create</i></a></p></td>
								<td><p><a class="btn cadpet borda modal-trigger" href="#modal-pet<?php echo $user['id_user'];?>"><i style="color:#fff;"class="material-icons">add</i></a></p></td>
							</tr>
						  </tbody>
								
					  </table>
					<br>
					  <p class="user_pet">Pets Vinculados:</p>
					  
					  <table>
						  <thead>
							<tr>
								<th>ID</th>
								<th>Img.</th>
								<th>Nome</th>
								<th>Tipo</th>
								<th>Raça</th>
								<th>Alterar</th>
								<th>Excluir</th>
							</tr>
						  </thead>

								<?php 
									$id_user = $user['id_user'];
									$sql_pet = "SELECT * FROM tb_animal WHERE id_user = '$id_user' ORDER BY nome_animal;";
									$query_pet = mysqli_query($conn, $sql_pet);
									if ($query_pet) {
										while ($pet = mysqli_fetch_array($query_pet, MYSQLI_ASSOC)) {
								?>	
						  <tbody>
							<tr>
								<td><p><?php echo $pet['id_animal']; ?></p></td>
								<td><img width = "50" src="<?php echo $pet['img_pet_path_adm']; ?>" alt=""></td>
								<td><p><?php echo $pet['nome_animal']; ?></p></td>
								<td><p><?php echo $pet['tipo_animal']; ?></p></td>
								<td><p><?php echo $pet['raca_animal']; ?></p></td>
								<td><p><a class="btn borda" href="alterar_produto.php?id=<?php echo $user['id_user'];?>"><i style="color:#fff;"class="material-icons">create</i></a></p></td>
								<td><p><a class="btn excluir borda" onclick = "return confirm('Deseja realmente excluir?');" href="excluir_produto.php?id=<?php echo $user['id_user'];?>"><i style="color:#fff;"class="material-icons">clear</i></a></p></td>
							</tr>
						  </tbody>
								<?php }}?>
					  </table>
					</div>
				</li>
			
				<li>
				  <div class="collapsible-header"><i style="color: #311b92;" class="material-icons">person_add</i><label for="">Cadrastar Usuário</label></div>
				  	<div class="collapsible-body">
						<form action="cadrastar_cliente.php" method="POST">
							<div class="cadprod">
								<div class="form-duo">
									<label for="desc">Nome*</label>
									<input type="text" name="nome_user">
								</div>
								<div class="form-duo">
									<label for="">Sobrenome</label>
									<input type="text" name="sobrenome_user">
								</div>
							</div>
							<br>
							<div class="cadprod">
								<div class="form-duo">
									<label for="desc">Usuario*</label>
									<input type="text" name="login_user">
								</div>
								<br>
								<div class="form-duo">
									<label for="desc">Senha*</label>
									<input type="password" name="pass_user">
								</div>
							</div>
							<br>
							<div class="cadprod">
								<div class="form-duo">
									<label for="">Endereço</label>
									<input type="text" name="end_user"></input>
								</div>
								<div class="form-duo">
									<label for="descont">Tipo*</label>
												<select name="tipo_user">
													<option value="Cliente">Cliente</option>
													<option value="Secretário">Secretário</option>
												</select>
									</div>
							</div>
							<br>
							<div class="form-field">
								<button class="btn  amber darken-4 borda">Cadrastar</button>
							</div>
						</form>
					</div>
				</li>
				<li>
				  <div class="collapsible-header"><i style="color: #311b92;" class="material-icons">pets</i><label for="">Cadrastar Animal p/ Adoção</label></div>
				  	<div class="collapsible-body">
						<form action="pet_adocao.php" enctype="multipart/form-data" method="POST">
								<div class="cadprod">
									<div class="form-duo">
										<label for="">Descrição</label>
										<input type="text" name="desc_pet">
									</div>
								</div>
								<br>
								<div class="cadprod">
								<div class="form-duo">
									<label for="desc">Nome*</label>
									<input type="text" name="nome_pet">
								</div>
								<div class="form-duo">
								<label for="descont">Tipo*</label>
												<select name="tipo_pet">
													<option value="Cachorro">Cachorro</option>
													<option value="Gato">Gato</option>
													<option value="Papagaio">Papagaio</option>
												</select>
								</div>
							</div>
							<br>
							<div class="cadprod">
								<div class="form-duo">
									<label for="desc">Raça*</label>
									<input type="text" name="raca_pet">
								</div>
								<br>
								<div class="form-duo">
									<label for="desc">Tamanho(m)</label>
									<input type="text" name="tam_pet">
								</div>
							</div>
							<br>
							<div class="cadprod">
							<div class="form-duo">
									<label for="">Peso(Kg)</label>
									<input type="text" name="peso_pet"></input>
								</div>
								<div class="form-duo">
									<label for="">Idade</label>
									<input type="text" name="idade_pet"></input>
								</div>
								<div class="form-duo">
									<label for="">Imagem*</label>
												<div class="file-field input-field">
													<div class="btn borda">
														<span>jpg/png</span>
														<input type="file" name="img_pet">
													</div>
													<div class="file-path-wrapper">
														<input class="file-path validate" type="text">
													</div>
												</div>
								</div>
							</div>
							<br>
							<div class="form-field">
								<button class="btn  amber darken-4 borda">Cadrastar</button>
							</div>
						</form>
					</div>
				</li>

				<!--<li>
				  <div class="collapsible-header"><i style="color: #311b92;" class="material-icons">colorize</i><label for="">Cadrastar Vacina</label></div>
				  	<div class="collapsible-body">
						<form action="cadrastar_cliente.php" method="POST">
							<div class="cadprod">
								<div class="form-duo">
									<label for="desc">Nome*</label>
									<input type="text" name="nome_user">
								</div>
								<div class="form-duo">
									<label for="">Tipo:*</label>
									<select class="browser-default" name="tipo_vac">
													<option value="Cachorro">Cachorro</option>
													<option value="Gato">Gato</option>
													<option value="Papagaio">Papagaio</option>
												</select>
								</div>
							</div>
							<br>
							<div class="cadprod">
								<div class="form-duo">
									<label for="desc">Lote*</label>
									<input type="text" name="login_user">
								</div>
								<br>
								<div class="form-duo">
									<label for="desc">Data de Vencimento</label>
									<input type="text" class="datepicker">
								</div>
							</div>
							<br>
							<div class="cadprod">
								<div class="form-duo">
									<label for="">Endereço</label>
									<input type="text" name="end_user"></input>
								</div>
								<div class="form-duo">
									<label for="descont">Tipo *</label>
												<select name="tipo_user">
													<option value="Cliente">Cliente</option>
													<option value="Secretário">Secretário</option>
													<option value="Admin">Administrador</option>
												</select>
									</div>
							</div>
							<br>
							<div class="form-field">
								<button class="btn  amber darken-4 borda">Cadrastar</button>
							</div>
						</form>
					</div>
				</li>
				<li>-->

				<li>
					<div onclick="location.href='listar_user.php'" class="collapsible-header"><i style="color: #311b92;" class="material-icons">art_track</i><label for="">Listar Usuários</label></div>
				</li>

				<li>
				  <div class="collapsible-header"><i style="color: #311b92;" class="material-icons">art_track</i><label for="">Listar Produtos</label></div>
				  <div class="collapsible-body">
						<form action="val_listar.php" methode="GET" name="form_listar">
							<div class="cadprod">
								<div class="form-duo_listar">
									<p class="fonte">Listar produtos do tipo:</p>
								</div>
								<div class="form-duo_listar">
									<select name="tipo_prod">
										<option value="1">Brinquedos</option>
										<option value="2">Caminhas</option>
										<option value="3">Comedouros</option>
										<option value="4">Vestiveis</option>
										<option value="11">Shampoo e Codionador</option>
										<option value="7">Perfumes</option>
										<option value="8">Sabonetes</option>
										<option value="9">Higiene Bucal</option>
										<option value="10">Diversos</option>
										<option value="12">Rações</option>
									</select>
								</div>
								<div class="form-duo_listar"><button class="btn borda">Listar</button></div>
						</form>
						</div>

				  </div>
				</li>
			  </ul>
		</div>
	</div>


<script type="text/javascript" src="../../materialize/js/materialize.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../../nivo-slider/jquery.nivo.slider.js"></script>
<script src="../../mod/js/main.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript"> 
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
  });

  const elemsPicker = document.querySelectorAll('.datepicker');
  const instancesPicker = M.Datepicker.init(elemsPicker);

  </script>
</body>
</html>