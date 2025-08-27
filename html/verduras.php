<!-- APRESENTAÇÃO DOS PRODUTOS -->
<?php
    session_start();
    // session_destroy();
    include ('../config/conexao.php');

    $sql = "SELECT * FROM cd_produtos WHERE categoria = 'verduras'";
    $query = mysqli_query($con, $sql);
?>
 <?php
    //  CRIANDO UMA SESSÃO CARRINHO //;

        // if(!isset($_SESSION['carrinho'])) {
        //     $_SESSION['carrinho'] = array();
        //     $_SESSION['usuario'] = session_id();

        // }  
        
        if(isset($_GET['cod'])) { // get vindo na pagina comprar //
            $cod = $_GET['cod'];
            $sessao = $_SESSION['usuario'];
            $sql2 = "SELECT * FROM pedidos WHERE cod = $cod AND sessao = '$sessao'";
            $query2 = mysqli_query($con, $sql2);
            $bd2 = mysqli_fetch_array($query2);
            if(!isset($_SESSION['carrinho'] [$cod])){
                $_SESSION['carrinho'] [$cod] =$bd2;
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
    <header>
        <div class="menu">
            <span class="material-icons menu">list</span>
        </div>
        <div class="logotipo">
            <div class="logo">
                <a href="index.php">
                    <img src="../Imagens/Icones/arte.png" alt="logotipo">
                </a>
            </div>
        </div>
        <div class="redes_sociais">
            <a href="">
                <span class="material-icons menu">call</span>
            </a>
        </div>
    </header>
    <main>
        <div class="global">
        <!-- CONTAINER PRODUTOS -->
            <div class="container_produtos first">
                <div class="barra_info">
                    <div class="container_search">
                        <div class="box_search">
                            <input type="search" maxlength="20" class="search">
                            <button>
                                <span class="material-icons">search</span>
                            </button>
                        </div>
                    </div>
                    <div class="container_cart">
                        <div class="icon_cart">
                            <span class="material-icons">shopping_cart</span>
                            <p>9</p>
                        </div>
                        <div class="valor_icon">
                            <span class="cifrao">R$</span>
                            <span class="valor">120,50</span>
                        </div>
                    </div>
                </div>
                <div class="categorias">
                    <a href="../html/frutas.php" class="frutas cat">Frutas</a>
                    <a href="../html/verduras.php" class="verdeuras cat">Verduras</a>
                    <a href="../html/raizes.php" class="raizes cat">Raizes</a>
                    <a href="" class="temperos cat">Temperos</a>
                </div>
                <div class="container_iframe" id="iframe">
                    <?php
                        while($dados = mysqli_fetch_array($query)){
                    ?>
                    <form action="../html/comprar.php" method="GET">
                        <button type="submit" class="container_item" id="container_item">
                            <input type="hidden" value="<?php echo $dados['cod'];?>" name="cod" id="id">
                            <div class="box_titulo">
                                <p class="titulo nome"><?php echo $dados['item'];?></p>
                            </div>
                            <div class="img">
                                <img src="<?php echo $dados['nomeImagem'];?>">
                            </div>
                        </button>
                    </form>
                    <?php };?>
                </div>
            </div>
        </div>    
    </main>
   <!-- MENU LATERAL -->
    <div class="menu_modal">
        <div class="btn_fechar">
            <h1>X</h1>
        </div>
        <div class="menu_lista">
            <a href="../html/cd_produtos.php">Cadastrar Produtos</a>
        </div>                                 
    </div>
</body>
</html>