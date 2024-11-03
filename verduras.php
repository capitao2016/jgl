<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JGL HORTIFRUTI</title>
    <link rel="stylesheet" href="style.css">
    <script src="index.js" defer></script>
    <script src="https://kit.fontawesome.com/70c6f55f6a.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="card">
            <img src="Imagens/Verduras/alho.png">
            <div class="titulo">
                <P>ALHO</P>
            </div>
            <!-- opções de compras dos produtos -->
            <div class="box_opc">
                <input type="radio" class="input_opc" name="input_opc" id="und">
                <label for="und">
                    <span class="texto">1 und</span>
                    <span class="valor">R$ <strong>1,50</strong></span>
                </label><br>
                <input type="radio" class="input_opc" name="input_opc" id="kg">
                <label for="kg">
                    <span class="texto">500 gr</span>
                    <span class="valor">R$ <strong>25,00</strong></span>
                </label><br>
                <!-- escolher a quantidade -->
                <div class="box_qnt">
                    <button class="btn_menos">-</button>
                    <input type="text" class="input_qnt" name="qnt" value="1">
                    <button class="btn_mais">+</button>
                </div>
                <!-- botão de incluir o produto no carrinho -->
                <button class="btn_adicionar" type="submit" name="submit"><i class="fa-solid fa-cart-shopping"></i>ADICIONAR</button>
            </div>
        </div>
        <div class="card">
            <img src="Imagens/Verduras/tomate.jpg">
            <div class="titulo">
                <P>TOMATE</P>
            </div>
            <!-- opções de compras dos produtos -->
            <div class="box_opc">
                <input type="radio" class="input_opc" name="input_opc" id="und">
                <label for="und">
                    <span class="texto">500 gr</span>
                    <span class="valor">R$ <strong>1,25</strong></span>
                </label><br>
                <input type="radio" class="input_opc" name="input_opc" id="kg">
                <label for="kg">
                    <span class="texto">1 Kg</span>
                    <span class="valor">R$ <strong>3,00</strong></span>
                </label><br>
                <!-- escolher a quantidade -->
                <div class="box_qnt">
                    <button class="btn_menos">-</button>
                    <input type="text" class="input_qnt" name="qnt" value="1">
                    <button class="btn_mais">+</button>
                </div>
                <!-- botão de incluir o produto no carrinho -->
                <button class="btn_adicionar" type="submit" name="submit"><i class="fa-solid fa-cart-shopping"></i>ADICIONAR</button>
            </div>
        </div>
    </div>
</body>
</html>