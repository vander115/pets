<?php 
				
					require_once '../conexao.php';
					if(isset($_POST['nome_user']) || isset($_POST['login_user']) || isset($_POST['pass_user']) || isset($_POST['tipo_user']) ){
						if(strlen($_POST['nome_user']) == 0){
							echo '<script type="text/javascript">alert("Insira seu Nome!");
                            window.location = "indexadmin.php";</script>';
						} else if(strlen($_POST['login_user']) == 0){
							echo '<script>alert("Insira seu Usuario!"); window.location = "indexadmin.php";</script>';
						} else if(strlen($_POST['pass_user']) == 0){
							echo '<script>alert("Insira sua Senha!"); window.location = "indexadmin.php";</script>';
						} else if(strlen($_POST['tipo_user']) == 0){
							echo '<script>alert("Selecione seu tipo de usuario!"); window.location = "indexadmin.php";</script>';
						} else {

							$nome_user = $_POST['nome_user'];
							$sobrenome_user = $_POST['sobrenome_user'];
							$login_user = $_POST['login_user'];
							$pass_user = $_POST['pass_user'];
							$tipo_user = $_POST['tipo_user'];
							$end_user = $_POST['end_user'];

							$sql = " INSERT INTO tb_user VALUES (NULL, '$nome_user', '$sobrenome_user', '$end_user', '$login_user', '$pass_user', '$tipo_user');";
							$query = mysqli_query($conn, $sql);
							
							if ($query) {
								echo '
                                <script>
                                alert("Cadrasto realizado com sucesso!")
                                window.location = "indexadmin.php"
                                </script>
                                
                                ';
							}
						}
					}
				
				?>