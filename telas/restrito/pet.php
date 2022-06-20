<?php
     require_once '../conexao.php';
     if(!isset($_SESSION)){
        session_start();
     }
     if(isset($_POST['nome_pet']) || isset($_POST['tipo_pet']) || isset($_POST['raca_pet']) || isset($_FILES['img_pet']) || isset($_POST['tam_pet']) || isset($_POST['peso_pet']) || isset($_POST['idade_pet'])){
         if(strlen($_POST['nome_pet']) == 0){
             echo '<script type="text/javascript">alert("Insira o nome do Animal!"); window.location = "indexadmin.php"; </script>';
         } else if(strlen($_POST['tipo_pet']) == 0){
             echo '<script>alert("Selecione o tipo de Animal!")</script>';
         } else if(strlen($_POST['raca_pet']) == 0){
             echo '<script>alert("Insira a Raça do Animal!")</script>';
         } else if(isset($_FILES['img_pet']) == 0){
             echo '<script>alert("Faça o upload de uma imagem!")</script>';
         } else if(strlen($_POST['idade_pet']) == 0){
             echo '<script>alert("Informe a idade do Animal!")</script>';
         } else {
             $img = $_FILES['img_pet'];
             if ($img['error']) {
                 die('
                     <script>
                         alert("Falha ao Enviar Imagem!");
                         window.location = "indexadmin.php";
                     </script>
                 ');
             }
             
     
             $pasta = "../../src/upimg_pet/";
             $pasta_banco = "../src/upimg_pet/";
             $nome_img = $img['name'];
             $new_nome_img = uniqid();
             $extensao_img = strtolower(pathinfo($nome_img, PATHINFO_EXTENSION));
     
             if($extensao_img != "jpg" && $extensao_img != "png" && $extensao_img != "jpeg" && $extensao_img != "webp"){
                 die('
                 <script>
                     alert("Tipo de Arquivo Não Suportado! Somente Imagens em JPG/JPEG/PNG/WEBP");
                     window.location = "";
                 </script>
                 ');
             }
     
             $path = $pasta . $new_nome_img . "." . $extensao_img;
             $path_banco = $pasta_banco . $new_nome_img . "." . $extensao_img;
 
             $deu_certo = move_uploaded_file($img['tmp_name'], $path);
 
 
 
             $nome_pet = $_POST['nome_pet'];
             $tipo_pet = $_POST['tipo_pet'];
             $raca_pet = $_POST['raca_pet'];
             $tam_pet = $_POST['tam_pet'];
             $idade_pet = $_POST['idade_pet'];
             $peso_pet = $_POST['peso_pet'];
             $id_dono = $_POST['id_dono'];
 
             $sql = " INSERT INTO tb_animal VALUES (NULL, '$nome_pet', '$tipo_pet', '$raca_pet', '$tam_pet', '$peso_pet', '$idade_pet', '$id_dono', '$path_banco', '$path');";
             $query = mysqli_query($conn, $sql) or die("Falha na Execução" . mysqli_error($query));
             
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
