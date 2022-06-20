<?php 
    require_once '../conexao.php';
    if(isset($_POST['desc_prod']) || isset($_POST['preco_prod']) || isset($_POST['tipo_prod']) || isset($_FILES['img_prod']) || isset($_POST['qtd_prod'])){
        if(strlen($_POST['desc_prod']) == 0){
            echo '<script type="text/javascript">alert("Insira a descrição do produto!"); window.location = "indexadmin.php"; </script>';
        } else if(strlen($_POST['preco_prod']) == 0){
            echo '<script>alert("Insira o preço do produto!")</script>';
        } else if(strlen($_POST['tipo_prod']) == 0){
            echo '<script>alert("Selecione o tipo do produto!")</script>';
        } else if(isset($_FILES['img_prod']) == 0){
            echo '<script>alert("Faça o upload de uma imagem!")</script>';
        } else if(strlen($_POST['qtd_prod']) == 0){
            echo '<script>alert("Informe a quantidade de produtos no estoque!")</script>';
        } else {
            $img = $_FILES['img_prod'];
            if ($img['error']) {
                die('
                    <script>
                        alert("Falha ao Enviar Arquivo!");
                        window.location = "indexadmin.php";
                    </script>
                ');
            }
            
    
            $pasta = "../../src/upimg/";
            $pasta_banco = "../src/upimg/";
            $nome_img = $img['name'];
            $new_nome_img = uniqid();
            $extensao_img = strtolower(pathinfo($nome_img, PATHINFO_EXTENSION));
    
            if($extensao_img != "jpg" && $extensao_img != "png"){
                die('
                <script>
                    alert("Imagem Muito Grande! MAX: 2MB");
                    window.location = "indexadmin.php";
                </script>
                ');
            }
    
            $path = $pasta . $new_nome_img . "." . $extensao_img;
            $path_banco = $pasta_banco . $new_nome_img . "." . $extensao_img;

            $deu_certo = move_uploaded_file($img['tmp_name'], $path);



            $desc_prod = $_POST['desc_prod'];
            $preco_prod = $_POST['preco_prod'];
            $tipo_prod = $_POST['tipo_prod'];
            $qtd_prod = $_POST['qtd_prod'];

            $sql = " INSERT INTO tb_produto VALUES (NULL, '$desc_prod', '$preco_prod', '$tipo_prod', '$path_banco', '$path', '$nome_img', '$qtd_prod');";
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