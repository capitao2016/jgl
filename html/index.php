<!-- APRESENTAÇÃO DOS PRODUTOS -->
<?php
session_start();
// session_destroy();
include('../config/conexao.php');
include('../html/header.php');
include('../html/category.php');

$sql = "SELECT * FROM cd_produtos";
$query = mysqli_query($con, $sql);
?>
<?php
//  CRIANDO UMA SESSÃO CARRINHO //;
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
    $_SESSION['usuario'] = session_id();
}

if (isset($_GET['cod'])) { // get vindo na pagina comprar //
    $cod = $_GET['cod'];
    $sessao = $_SESSION['usuario'];
    $sql2 = "SELECT * FROM pedidos WHERE cod = $cod AND sessao = '$sessao'";
    $query2 = mysqli_query($con, $sql2);
    $bd2 = mysqli_fetch_array($query2);
    if (!isset($_SESSION['carrinho'][$cod])) {
        $_SESSION['carrinho'][$cod] = $bd2;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/index.css">
    <script src="../js/index.js" defer></script>
    <title>JGL</title>
</head>
<body>
    <iframe class="iframe" id="iframe"></iframe>
</body>
</html>