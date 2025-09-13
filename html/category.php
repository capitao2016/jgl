<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        @import url(../css/global.css);
        .barra_info {
            width: 100%;
            height: 2.5em;
            margin-top: 1em;
            display: flex;
            align-items: center;

            .container_search {
                width: 70%;
                height: 1005;
                display: flex;
                align-items: center;
                justify-content: center;

                .box_search {
                    width: 90%;
                    height: 2.5em;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    border-radius: 2em;
                    background-color: white;
                    box-shadow: 0 0 0.3em 0.1em black;

                    .search {
                        width: 80%;
                        height: 100%;
                        border: none;
                        outline: none;
                        font-size: 1.8em;
                        padding-left: 0.5em;
                        border-radius: 1em 0 0 1em;
                        background-color: transparent;
                        font-style: italic;
                    }

                    button,
                    span {
                        display: flex;
                        background-color: transparent;
                        border: none;
                        cursor: pointer;
                    }
                }
            }

            .container_cart {
                width: 27%;
                height: 100%;
                display: flex;
                background-color: rgba(0, 255, 8, 0.405);
                border-bottom: 0.2em solid black;
                cursor: pointer;


                .icon_cart {
                    width: 20%;
                    height: 100%;
                    text-align: center;

                    span {
                        font-size: 2.5em;
                    }

                    p {
                        position: absolute;
                        width: 1em;
                        height: 1em;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        margin-top: -2em;
                        margin-left: 0.8em;
                        border-radius: 50%;
                        background-color: yellow;
                        box-shadow: 0 0 0.05em 0.1em white;
                        font-size: 1.8em;
                    }
                }

                .valor_icon {
                    width: 70%;
                    height: 100%;
                    display: flex;
                    align-items: end;
                    justify-content: center;
                    margin-left: 1em;

                    .cifrao {
                        font-size: 1.1em;
                    }

                    .valor {
                        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                        font-size: 1.5em;
                        font-style: italic;
                    }
                }
            }
        }

        .categorias {
            width: 100%;
            height: 2.5em;
            margin-top: 1em;
            display: grid;
            grid-template-columns: repeat(4, 1fr);

            .cat {
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                font-style: italic;
                font-size: 1.8em;
                text-align: center;
                text-decoration: none;
                color: black;
            }
        }
    </style>
    <!-- <title>Document</title> -->
</head>
<body>
    <div class="barra_info">
        <div class="container_search">
            <div class="box_search">
                <input type="search" maxlength="20" class="search">
                <button>
                    <span class="material-icons">search</span>
                </button>
            </div>
        </div>
        <div class="container_cart" id="container_cart">
            <div class="icon_cart">
                <span class="material-icons">shopping_cart</span>
                <p id="iconeItemCart">9</p>
            </div>
            <div class="valor_icon">
                <span class="cifrao">R$</span>
                <span class="valor" id="valor">120,50</span>
            </div>
        </div>
    </div>
    <div class="categorias">
        <a href="../html/frutas.php" class="frutas cat">Frutas</a>
        <a href="../html/verduras.php" class="verdeuras cat">Verduras</a>
        <a href="../html/raizes.php" class="raizes cat">Raizes</a>
        <a href="" class="temperos cat">Temperos</a>
    </div>
</body>
</html>