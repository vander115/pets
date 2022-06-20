<?php
    require_once '../conexao.php';
    $assunto = filter_input(INPUT_GET, 'term', FILTER_SANITIZE_STRING);

    $result = "SELECT * FROM tb_user WHERE nome_user LIKE '%$assunto%' ORDER BY nome_user ASC LIMIT 7;";

    $resultado = mysqli_query($conn, $result);
     while($row = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
         $data[] = $row['nome_user'];
     }

     echo json_encode($data);
?>