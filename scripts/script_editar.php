<?php
    include ('../config/conexao.php');

        $cod = $_POST['cod'];
        $item = $_POST['item'];
        $preco = $_POST['preco'];
        $tipo = $_POST['tipo'];
        $peso = $_POST['peso'];
        $categoria = $_POST['categoria'];
        $img = $_FILES['img'];
    ////// TRATAMENTO DA IMAGEM////////////
        $pasta = "../Imagens/img_produtos/";
        $nomeImagem = $img['name'];
        $novoNome = uniqid();
        $extensao = strtolower(pathinfo($nomeImagem, PATHINFO_EXTENSION));
        $path = $pasta . $novoNome . '.' . $extensao;
        $resul = move_uploaded_file($img['tmp_name'], $path);

        MYSQLI_QUERY($con, "UPDATE  cd_produtos SET cod='$cod', item='$item', preco='$preco', tipo='$tipo', peso='$peso', categoria='$categoria', img='$nomeImagem', nomeImagem='$path' ");

    header("location: ../html/cd_produtos.php");