<?php 

require_once "../conexao.php";

$id_prod = $_GET['id'];
$sql = "SELECT * FROM tb_produto WHERE id_prod = '$id_prod';";
$query = mysqli_query($conn, $sql);
$arq = mysqli_fetch_array($query, MYSQLI_ASSOC);

if (unlink($arq['img_prod_path_adm'])) {
$del = "DELETE FROM tb_produto WHERE id_prod = '$id_prod';";
$del_query = mysqli_query($conn, $del);

    if ($del_query) {
        echo '  <script>
            alert("Exclusão realizada com sucesso!");
            window.location = "tela_listar.php";
        </script>
            ';
        mysqli_close($conn);
    }
}

 ?>