<?php
    include('conexao.php');

    if(isset($_POST['editar'])){
        
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $quantidade = $_POST['quantidade'];
        $preco = $_POST['preco'];
        $peso = $_POST['peso'];
        $descricao = $_POST['descricao'];
        $categoria = $_POST['categoria'];
        $imagem = $_FILES['imagem']['name'];

        $produtos = MYSQLI_QUERY($connexxao, "UPDATE produtos SET titulo='$titulo', quantidade='$quantidade', preco='$preco', peso='$peso', descricao='$descricao', categoria='$categoria', imagem='$imagem' WHERE id='$id' ");
    }
    else if(isset($_POST['excluir'])){
        $id = $_POST['id'];
        $excluir = mysqli_query($connexxao, "DELETE FROM produtos WHERE id='$id' ");
    }
    header('location: cadastro_produtos.php');
?>