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
<body>
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
                <i class="fa-solid fa-cart-shopping"></i>
                <span class="qnt-cart">10</span>
            </div>
            <p class="cifrao">R$</p>
            <span class="valor-cart">255,50</span>
       </div>
    </div>
    <main class="frame">
        <iframe src="" name="frame" class="list-products">
    
        </iframe>
    </main>
    <input type="text" maxlength="">
</body>
</html>