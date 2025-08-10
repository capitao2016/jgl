<!-- APRESENTAÇÃO DOS PRODUTOS -->
<?php
    session_start();
    // session_destroy();
    include ('../config/conexao.php');

    $sql = "SELECT * FROM cd_produtos";
    $query = mysqli_query($con, $sql);
?>
 <?php
    //  CRIANDO UMA SESSÃO CARRINHO //;
        if(!isset($_SESSION['carrinho'])) {
            $_SESSION['carrinho'] = array();
            $_SESSION['usuario'] = session_id();
        }  
        
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
    <script src="./js/index.js" defer></script>
    <title>JGL</title>
</head>
<body>
    <header>
        <div class="menu">
            <span class="material-icons menu">list</span>
        </div>
        <div class="logotipo">
            <div class="logo">
                <a href="../index.php">
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
    <nav>
        <div class="label" id="label_produtos">
            <label for="input_produtos">Produtos</label>
        </div>
        <div class="label" id="label_resumo">
            <label for="input_resumo">Resumo</label>
        </div>
    </nav>
    <main>
        <div class="global">
            <input type="radio" name="radios" id="input_produtos" class="input_produtos" checked>
            <input type="radio" name="radios" id="input_resumo" class="input_resumo">
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
                   
                </div>
            </div>
        <!-- CONTAINER RESUMO -->
            <div class="container_resumo">
                <div class="cart_item">
                        <div class="table">
                            <table>
                                <thead>
                                    <tr>
                                        <th rowspan="2" class="cod">Cod</th>
                                        <th>Descrição</th>
                                        <th>Qnt</th>
                                        <th>Unit.</th>
                                        <th>Total</th>
                                        <th>~</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
                                        if(count($_SESSION['carrinho']) == 0){
                                                    echo "<tr><td></td></tr>";
                                                    echo "<tr><td></td></tr>";
                                                    echo "<tr><td colspan='6'><h1 class='cart_vazio_text'>Carrinho Vazio!</h1></td></tr>";
                                                    echo "<tr><td></td></tr>";
                                                    echo "<tr><td></td></tr>";
                                                    echo "<tr> <td colspan='6'> <a href='../html/index.php'><button class='btn_cart_vazio'>Pagina do Menu</button></a> </td> </tr>";
                                                }else {
                                                    foreach($_SESSION['carrinho'] as $produto){
                                                            $cod_item = $produto['cod'];
                                                            $item = $produto['item'];
                                                            $qnt = $produto['qnt'];
                                                            $preco = $produto['preco'];
                                                            $total = $produto['total'];
                                                           echo "
                                                                <tr>
                                                                    <td>$cod_item</td>
                                                                    <td>$item</td>
                                                                    <td>$qnt</td>
                                                                    <td>$preco</td>
                                                                    <td name='sub'>$total</td>
                                                                    <td><a href='../scripts/excluir_item.php?cod=$cod_item'><span class='material-icons'>delete</span></a></td>
                                                                </tr>
                                                                ";
                                                        }}
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="footer">
                            <table>
                                <tbody>
                                    <?php //Contagem de itens no carrinho de compras //
                                        if(!count($_SESSION['carrinho']) == 0){
                                            $sessaoCount = $_SESSION['usuario'];
                                            $sqlcount = mysqli_query($con, "SELECT COUNT(id_pedido) AS qnt_item FROM  pedidos WHERE sessao = '$sessaoCount' ");
                                            $bdcount = mysqli_fetch_assoc($sqlcount);

                                            $qnt_item = $bdcount['qnt_item'];
                                            echo "
                                            <tr>
                                                <td class='col-1' colspan='2'>Quantidade de Itens</td>
                                                <td class='col-3'>$qnt_item</td>
                                            </tr>
                                            
                                            ";
                                        }
                                    ?>
                                    <?php // Resultado do Subtotal //
                                        $sqlfooter = "SELECT total, sessao FROM pedidos";
                                        $queryfooter = mysqli_query($con, $sqlfooter);
                                        
                                        $valor = 0;
                                        while($date = mysqli_fetch_array($queryfooter)){
                                            // $cod = $date['cod'];
                                            $sessao = $date['sessao'];
                                            if($sessao == $_SESSION['usuario']){
                                                $total = $date['total'];
                                                $valor += $total;
                                            }
                                        }
                                    ?>
                                        <tr>
                                            <td class='col-1' colspan="2">Sub-Total</td>
                                            <td class='col-3'><?php echo number_format($valor, 2, ',', '.');?></td>
                                        </tr>
                                    <?php // Cupom de descontos //
                                    ?>
                                        <tr>
                                            <td class='col-1'>Cupom / desconto</td>
                                            <td class='col-2'><input type='text' value='JGL2025' name="cupom" maxlength="10"></td>
                                            <td class='col-3'><span>- </span>0,00</td>
                                        </tr>
                                    <?php // Total com os descontos //
                                    ?>
                                        <tr>
                                            <td class='col-1' colspan="2">Total</td>
                                            <td class='col-3'><span>= </span><?php echo number_format($valor, 2, ',', '.');?></td>
                                        </tr>
                                </tbody>
                            </table>           
                        </div>
                </div>
                <div class="btn_buy">
                    <a href="../html/checkout.php"><button><p>Finalizar Pedido</p></button></a>
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
            <a href="/html/cd_produtos.php">Cadastrar Produtos</a>
        </div>                                 
    </div>
</body>
</html>