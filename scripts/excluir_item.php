<?php
    session_start();
    include ('../config/conexao.php');

    if(isset($_GET['cod'])){
        $cod = $_GET['cod'];
        $sessaoDelete = $_SESSION['usuario'];
        if(isset($_SESSION['carrinho'] [$cod])) {
          $sqldelete = mysqli_query($con, "DELETE FROM pedidos WHERE cod = $cod AND sessao = '$sessaoDelete' ");
          unset($_SESSION['carrinho'] [$cod]);
          // $sql = mysqli_query($con, "SELECT COUNT(id_pedido) AS qnt_item FROM  pedidos");

          header("location: ../html/cart.php");
        }
      }