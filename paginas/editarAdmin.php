<?php
    include("conexao.php");
    
    if(isset($_POST["editar"])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $editar = "UPDATE administradores SET nome='$nome', senha='$senha' WHERE id='$id' ";
        mysqli_query($connexxao, $editar);
    }
    else if(isset($_POST["excluir"])){
        $id = $_POST['id'];
        $excluir ="DELETE FROM administradores WHERE id='$id' ";
        mysqli_query($connexxao, $excluir);
    }
    header('location: admin.php');
?>
