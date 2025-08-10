<?php
    include ('../config/conexao.php');

        $cod = $_GET['cod'];
        
        MYSQLI_QUERY($con, "DELETE FROM cd_produtos WHERE  cod = $cod");

    header("location: ../html/cd_produtos.php");