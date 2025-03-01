<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="script.js" defer></script>
    <script src="https://kit.fontawesome.com/70c6f55f6a.js" crossorigin="anonymous"></script>
</head>
    <header>
        <div class="logo"><img src="../Imagens/Icones/arte.png" alt="logo"></div>
        <div class="menu"><i class="fa-solid fa-bars"></i></div>
    </header>
    <nav class="modal-menu">
        <a href="index.php"><li>Home</li></a>
        <a href="cadastro_produtos.php"><li>Cadastro de Produtos</li></a>
        <a href="admin.php"><li>Area do Admin</li></a>
        <a href=""><li>Area dos Clientes</li></a>
        <a href=""><li>Contatos</li></a>
        <a href=""><li>Sobre</li></a>
    </nav>
    <section class="category-menu">
        <a href="../paginas/frutas.php" target="frame">
            <div class="itens">
                <div class="quadro"></div>
                <img src="../Imagens/Frutas/Banana Prata.png" alt="frutas">
                <p>FRUTAS</p>
            </div>
        </a>
        <a href="../paginas/verduras.php" target="frame">
            <div class="itens">
                <div class="quadro"></div>
                <img src="../Imagens/Verduras/tomato.png" alt="verduras">
                <p>VERDURAS</p>
            </div>
        </a>
        <a href="../paginas/raizes.php" target="frame">
            <div class="itens">
                <div class="quadro"></div>
                <img src="../Imagens/Raizes/batata-doce.png" alt="raizes">
                <p>RAIZES</p>
            </div>
        </a>
    </section>
    <div class="barra-search">
       <div class="box-search">
        <input type="text" autofocus maxlength="20" placeholder="O que você procura...?">
        <button type="submit" name="search" class="btn-search">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
       </div>
       <div class="box-cart">
            <div class="cart">
                <a href="" class="icon-cart"><i class="fa-solid fa-cart-shopping"></i></a>
                <span class="qnt-cart">10</span>
            </div>
            <p class="cifrao">R$</p>
            <span class="valor-cart">255,50</span>
       </div>
    </div>
    <!-- MODAL OF CART -->
    <div class="modal-cart">
        <div class="box-cart">
            <div class="box-closed">
                <h1>X</h1>
            </div>
            <div class="tittle-cart">
                <h1>Meu Carrinho</h1>
            </div>
            <div class="table-cart">
                <table>
                    <thead>
                        <tr class="table-header">
                            <th>PRODUTO</th>
                            <th>QUANTIDADE</th>
                            <th>PREÇO</th>
                            <th>TOTAL</th>
                            <th>~</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr class="table-row">
                                <td class="td-produtos">
                                    <div class="name-product">
                                        <img src="../Imagens/Frutas/Goiaba Madura.png" alt="abacate">
                                        <p>Goiaba Madura</p>
                                    </div>
                                    <div class="desc">
                                        <p><span id="desc-und">4 a 6</span> <span>Und.</span></p>
                                    </div>
                                </td>
                                <td class="table-qnt">
                                    <div class="number">
                                        <button id="btn-menos"><i class="fa-solid fa-minus"></i></button>
                                        <input type="text" value="1">
                                        <button id="btn-mais"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                    <div class="text">
                                        <p class="text-peso">500 gramas</p>
                                    </div>
                                </td>
                                <td class="preco">5,00</td>
                                <td class="total">15,00</td>
                                <td class="total"><i class="fa-solid fa-trash-can"></i></td>
                            </tr>
                            <tr class="table-row">
                                <td class="td-produtos">
                                    <div class="name-product">
                                        <img src="../Imagens/Frutas/Goiaba Madura.png" alt="abacate">
                                        <p>Goiaba Madura</p>
                                    </div>
                                    <div class="desc">
                                        <p><span id="desc-und">4 a 6</span> <span>Und.</span></p>
                                    </div>
                                </td>
                                <td class="table-qnt">
                                    <div class="number">
                                        <button id="btn-menos"><i class="fa-solid fa-minus"></i></button>
                                        <input type="text" value="1">
                                        <button id="btn-mais"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                    <div class="text">
                                        <p class="text-peso">500 gramas</p>
                                    </div>
                                </td>
                                <td class="preco">5,00</td>
                                <td class="total">15,00</td>
                                <td class="total"><i class="fa-solid fa-trash-can"></i></td>
                            </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="rodape-cart">
                                <button class="btn1">Limpar Carrinho</button>
                                <button class="btn2">Finalizar Compra</button>
                                <h2>R$</h2>
                                <h2 class="rodape-total">00.00</h1>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <main class="frame">
        <iframe src="" name="frame" class="list-products">
    
        </iframe>
    </main>
    <input type="text" maxlength="">
</body>
</html>