<?php 
				
					require_once '../conexao.php';
					if(isset($_POST['nome_user']) || isset($_POST['login_user']) || isset($_POST['pass_user']) || isset($_POST['tipo_user']) ){
						if(strlen($_POST['nome_user']) == 0){
							echo '<script type="text/javascript">alert("Insira seu Nome!");
                            window.location = "listar_user.php";</script>';
						} else if(strlen($_POST['login_user']) == 0){
							echo '<script>alert("Insira seu Usuario!"); window.location = "listar_user.php";</script>';
						} else if(strlen($_POST['pass_user']) == 0){
							echo '<script>alert("Insira sua Senha!"); window.location = "listar_user.php";</script>';
						} else if(strlen($_POST['tipo_user']) == 0){
                            echo '<script>alert("Insira sua Senha!");</script>';
						} else {
                            $id_user = $_POST['id_user'];    
							$nome_user = $_POST['nome_user'];
							$sobrenome_user = $_POST['sobrenome_user'];
							$login_user = $_POST['login_user'];
							$pass_user = $_POST['pass_user'];
							$tipo_user = $_POST['tipo_user'];
							$end_user = $_POST['end_user'];

							$sql = "UPDATE tb_user SET nome_user = '$nome_user', sobnome_user = '$sobrenome_user', login_user = '$login_user', pass_user = '$pass_user', tipo_user = '$tipo_user', end_user = '$end_user' WHERE id_user = '$id_user' ; ";
							$query = mysqli_query($conn, $sql);
							
							if ($query) {
								echo '
                                <script>
                                alert("Alteração realizada com sucesso!")
                                window.location = "listar_user.php"
                                </script>
                                
                                ';
							}
						}
					}
				
				?>