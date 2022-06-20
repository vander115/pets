<?php

    if (!isset($_SESSION)) {
        session_start();
    }

    if (!isset($_SESSION['user_pet'])) {
     die('
     <script>
        alert("Você não pode acessar essa página sem estar logado!");
        window.location = "../conta.php";
        </script>
     ');
    }

?>