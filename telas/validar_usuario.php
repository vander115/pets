<?php 

require_once 'conexao.php';
if(!isset($_SESSION)){
	session_start();
}
	if(!isset($_SESSION['user_pet'])){
		if(isset($_POST['login']) || isset($_POST['pass'])){
			if(strlen($_POST['login']) == 0){
				echo '<script>
				alert("Insira seu usuário!")
				window.location = "conta.php";
				</script>';
			} else if(strlen($_POST['pass']) == 0){
				echo '<script>
				alert("Insira sua senha!")
				window.location = "conta.php";
				</script>';
			} else {

				$login = $_POST['login'];
				$senha = $_POST['pass'];
				$tipo = $_POST['group1'];

				$sql = " SELECT * FROM tb_user WHERE login_user = '$login' AND pass_user = '$senha'; ";

				$query = mysqli_query($conn, $sql);
				
				$linha = mysqli_num_rows($query);

				if($linha  == 1){
					$usuario = mysqli_fetch_assoc($query);

					if(isset($_SESSION)){
						session_start();
					}

					$_SESSION['user_pet'] = $usuario['id_user'];
					$_SESSION['name'] = $usuario['nome_user'];
					$_SESSION['tipo'] = $usuario['tipo_user'];

					if($_SESSION['tipo'] == 'Admin'){
						header('Location:restrito/indexadmin.php');
					}else if ($_SESSION['tipo'] == 'Secretário') {
						header('Location:restrito/indexsecret.php');
					}else if ($_SESSION['tipo'] == 'Cliente') {
						header('Location:restrito/indexsecret.php');
					}
				}else{
					echo '<script>
					alert("Falha ao logar! Usuario, senha ou tipo incorretos!")
					window.location = "conta.php";
					</script>';
				}
			}
		}
	}if(!empty($_SESSION['tipo'])){
		if($_SESSION['tipo'] == 'Admin'){
        header('Location:restrito/indexadmin.php');
    }else if ($_SESSION['tipo'] == 'Secretário') {
        header('Location:restrito/indexsecret.php');
    }else if ($_SESSION['tipo'] == 'Cliente') {
		header('Location:restrito/indexsecret.php');
	}
}
?>