<!-- APRESENTAÇÃO DOS PRODUTOS -->
<?php
session_start();
include('../config/conexao.php');

$sql = "SELECT * FROM cd_produtos WHERE categoria = 'frutas'";
$query = mysqli_query($con, $sql);
?>
<?php
//  CRIANDO UMA SESSÃO CARRINHO //;

// if(!isset($_SESSION['carrinho'])) {
//     $_SESSION['carrinho'] = array();
//     $_SESSION['usuario'] = session_id();

// }  

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
// echo $bd2['item'];
// print_r($_SESSION['carrinho']);
// echo "</br>";
// print_r($_SESSION['usuario']);


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
    <div class="container_iframe" id="iframe">
        <?php
        while ($dados = mysqli_fetch_array($query)) {
        ?>
            <form action="../html/comprar.php" method="GET">
                <button type="submit" class="container_item" id="container_item">
                    <input type="hidden" value="<?php echo $dados['cod']; ?>" name="cod" id="id">
                    <div class="box_titulo">
                        <p class="titulo nome"><?php echo $dados['item']; ?></p>
                    </div>
                    <div class="img">
                        <img src="<?php echo $dados['nomeImagem']; ?>">
                    </div>
                </button>
            </form>
        <?php }; ?>
    </div>
</body>

</html>