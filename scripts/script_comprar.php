<?php
    session_start();
    include ('../config/conexao.php');

    $cod = $_GET['cod'];
    $item = $_GET['item'];
    $qnt = $_GET['qnt'];
    $preco = $_GET['preco'];
    $soma = $qnt * $preco;
    $total = number_format($soma, 2, '.', ',');
    $sessao = $_SESSION['usuario'];

    $sql = "INSERT INTO pedidos (cod, item, qnt, preco, total, sessao) VALUES('$cod', '$item', '$qnt', '$preco', '$total', '$sessao')";
    $query = mysqli_query($con, $sql);

    header("location: ../html/index.php?cod=$cod");