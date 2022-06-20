<?php 
    require_once '../conexao.php';
    if(isset($_POST['desc_prod']) || isset($_POST['preco_prod']) || isset($_POST['tipo_prod']) || isset($_POST['qtd_prod'])){
        if(strlen($_POST['desc_prod']) == 0){
            echo '<script type="text/javascript">alert("Insira a descrição do produto!"); window.location = "indexadmin.php"; </script>';
        } else if(strlen($_POST['preco_prod']) == 0){
            echo '<script>alert("Insira o preço do produto!")</script>';
        } else if(strlen($_POST['tipo_prod']) == 0){
            echo '<script>alert("Selecione o tipo do produto!")</script>';
        } else if(strlen($_POST['qtd_prod']) == 0){
            echo '<script>alert("Informe a quantidade de produtos no estoque!")</script>';
        } else {
            $id_alter = $_GET['id'];
            $desc_prod = $_POST['desc_prod'];
            $preco_prod = $_POST['preco_prod'];
            $tipo_prod = $_POST['tipo_prod'];
            $qtd_prod = $_POST['qtd_prod'];
            $img = $_FILES['img_alter'];

            if (!$img['error']) {
    
            $sql = "SELECT * FROM tb_produto WHERE id_prod = '$id_alter';";
            $query = mysqli_query($conn, $sql);
            $arq = mysqli_fetch_array($query, MYSQLI_ASSOC);
            unlink($arq['img_prod_path_adm']);

            $pasta = "../../src/upimg/";
            $pasta_banco = "../src/upimg/";
            $nome_img = $img['name'];
            $new_nome_img = uniqid();
            $extensao_img = strtolower(pathinfo($nome_img, PATHINFO_EXTENSION));
    
            if($extensao_img != "jpg" && $extensao_img != "png"){
                die('
                <script>
                    alert("Extensão de Arquivo Invalida! Somente: jpg/png!");
                    window.location = "indexadmin.php";
                </script>
                ');
            }

            $path = $pasta . $new_nome_img . "." . $extensao_img;
            $path_banco = $pasta_banco . $new_nome_img . "." . $extensao_img;

            $deu_certo = move_uploaded_file($img['tmp_name'], $path);

            $sql = " UPDATE tb_produto SET desc_prod = '$desc_prod', preco_prod = '$preco_prod', tipo_prod = '$tipo_prod', img_prod_path = '$path_banco', img_prod_path_adm = '$path', img_prod_nome = '$nome_img', qtd_prod = '$qtd_prod' WHERE id_prod = '$id_alter';";
            $query = mysqli_query($conn, $sql) or die("Falha na Execução" . mysqli_error($query));
            
            if ($query) {
                echo '
                <script>
                alert("Alteração realizada com sucesso!")
                window.location = "tela_listar.php"
                </script>
                
                ';
            }
            } else {

                $sql = " UPDATE tb_produto SET desc_prod = '$desc_prod', preco_prod = '$preco_prod', tipo_prod = '$tipo_prod', qtd_prod = '$qtd_prod' WHERE id_prod = '$id_alter';";
                $query = mysqli_query($conn, $sql) or die("Falha na Execução" . mysqli_error($query));
                
                if ($query) {
                    echo '
                    <script>
                    alert("Alteração realizada com sucesso!")
                    window.location = "tela_listar.php"
                    </script>
                    
                    ';
                }

            }

        }
    }
?>