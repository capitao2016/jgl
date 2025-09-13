<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        @import url(../css/global.css);
        header {
            width: 100vw;
            height: 5em;
            display: grid;
            grid-template-columns: 30% 50% 20%;
            background-color: rgb(5, 77, 5);

            .jgl,
            .hortifruti,
            .menu {
                height: 5em;
            }

            .jgl {
                text-align: right;
                cursor: pointer;

                img {
                    width: 80%;
                    height: 5em;
                }
            }

            .hortifruti {
                overflow: hidden;

                h1 {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 4.2em;
                    font-style: italic;
                    color: white;
                    margin-top: 0.15em;
                    letter-spacing: 0.05em;
                    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                    font-weight: bold;
                }

                .menu {
                    background-color: orange;
                }
            }

            .menu {
                cursor: pointer;

                span {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: white;
                    font-size: 3em;
                    font-weight: bold;
                    width: 100%;
                    height: 100%;
                }
            }
        }

        .subTitulo {
            background-color: rgba(5, 77, 5, 0.555);
            padding: 0.1em;

            h3 {
                text-align: center;
                letter-spacing: 0.2em;
                word-spacing: 0.2em;
                color: white;
                font-style: italic;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            }
        }
    </style>
    <!-- <title>Document</title> -->
</head>
<body>
    <header>
        <div class="jgl"><img src="../Imagens/outros/logotipo-removebg.png" alt="logo"></div>
        <div class="hortifruti">
            <h1>HORTIFRUTI</h1>
        </div>
        <div class="menu"><span class="material-icons">menu</span></div>
    </header>
    <div class="subTitulo">
        <h3>Qualidade, frescor e praticidade em sua porta</h3>
    </div>
</body>
</html>