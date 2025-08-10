<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <style>
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        main{
            width: 100%;
            height: auto;
           
            .cabecalho{
                z-index: 13;
                position: fixed;
                width: 100%;
                height: 50px;
                display: flex;
                align-items: center;
                justify-content: space-evenly;
                background-color: rgb(29, 170, 29);

                a{
                    text-decoration: none;
                    .back{
                        width: 6em;
                        display: flex;
                        align-items: center;
                        justify-content: space-evenly;
                        border-radius: 1em;
                        border: none;
                        font-weight: 800;
                        cursor: pointer;            
                    }
                }
            }
            .grupo{
                position: absolute;
                width: 100%;
                margin-top: 4em;
                height: calc(100vh - 8em);
                display: flex;
                margin-left: 0%;

                .dadosPessoais{
                    .etapas{
                        width: 100vw;
                        height: 3.5em;
                        display: flex;
                        align-items: center;
                        justify-content: space-evenly;

                          .btn1{
                            background-color: rgb(29, 170, 29);
                            color: white;
                            span{
                                font-size: 20px;
                                font-weight: bold;
                            }
                        }
                        button{
                            width: 5em;
                            height: 3em;
                            border-radius: 1em;
                            border: none;
                            background-color: rgba(128, 128, 128, 0.37);
                            font-family: fantasy;
                        }
                        .divisor1{
                            width: 2em;
                            border-bottom: 0.35em solid rgb(29, 170, 29);
                        }
                        /* input[type=radio]{
                            width: 5em;
                            height: 3em;
                        }
                        input[type=radio]::after{
                            width: 5em;
                            height: 3em;
                            background-color: rgb(219, 214, 214);
                            content: attr(value);
                            display: block;
                            border-radius: 5em;
                        }
                        input[type=radio]:checked::after{
                            background-color: rgb(29, 170, 29);
                        } */
                    }
                    .form{
                        position: absolute;
                        width: 80vw;
                        height: 20em;
                        margin: 0 10vw;
                       
                        form{
                            width: 100%;
                            margin-top: 2em;
                           
                             h4{
                                text-align: center;
                                background-color: rgba(128, 128, 128, 0.253);
                                border-radius: 10px;
                            }
                            .boxSenha{
                                    width: 90%;
                                    height: auto;
                                    margin: 5%;
                                    padding: 5px;
                                    overflow: hidden;
                                    box-shadow: 0 0 10px 1px green;
                                    border-radius: 10px;
                                
                                .opcaoAcesso{
                                    display: flex;
                                    justify-content: space-between;

                                    label{
                                        font-size: 20px;
                                    }
                                    .boxVisitante{
                                        width: 35%;
                                        height: 25px;
                                        display: flex;
                                        align-items: center;
                                        justify-content: center;

                                        .inputRadio{
                                            width: 20px;
                                            height: 20px;
                                        }
                                    }
                                    .boxCliente{
                                        width: 60%;
                                        border-left: 2px solid black;
                                        
                                        .cliente{
                                            width: 100%;
                                            display: flex;
                                            align-items: center;
                                            justify-content: center;

                                            .inputRadio{
                                                width: 20%;
                                                height: 20px;
                                                background-color: red;
                                            }
                                        }
                                        .senhaCliente{

                                            .textSenha{
                                                text-align: center;
                                            }
                                            .inputSenha{
                                                width: 80%;
                                                margin: 0 10%;
                                                text-align: center;
                                            }
                                        }
                                    }
                                }
                            }
                            label{
                                font-size: 0.8em;
                                font-weight: 600;
                                font-style: italic;
                            }
                            input{
                                width: 100%;
                                height: 2.2em;
                                border-radius: 1em;
                                border: none;
                                border-bottom: 2px solid green;
                                outline: none;
                                padding-left: 1em;
                            }
                            input[type=text]:checked{
                                border: 1em solid black;
                            }
                            .campos1{
                                width: 100%;
                                display: flex;
                                align-items: center;
                                justify-content: space-evenly;
                                
                                .numero, .cep{
                                    width: 30%;
                                    input{
                                        width: 85%;
                                    }
                                }
                                .complemento, .bairro{
                                    width: 70%;
                                    input{
                                        width: 100%;
                                    }
                                }
                                /* .cidade{
                                    width: 30%;
                                    input{
                                        width: 85%;
                                    }
                                } */
                                .cidade{
                                    width: 100%;
                                    input{
                                        width: 90%;
                                    }
                                }
                            }
                            button{
                                width: 100%;
                                height: 2em;
                                background-color:  rgb(29, 170, 29);
                                color: white;
                                font-family: Verdana, Geneva, Tahoma, sans-serif;
                                font-size: 1em;
                                border: none;
                                border-radius: 10em;
                                cursor: pointer;
                                margin: 10px 0 40px;
                            }
                        }
                    }
                }
            }
        }
    </style>
    <script src="../js/ckeckout.js" defer></script>
    <title>Checkout</title>
</head>
<body>
    <main>
        <div class="cabecalho">
            <a href="../html/index.php">
                <button class="back"><span class="material-icons">keyboard_backspace</span>Voltar</button>
            </a> 
            <h2>Finalizar Compra</h2>
        </div>
        <section class="grupo">
            <div class="dadosPessoais">
                <div class="etapas">
                <button class="btn1"><span>1</span></button>
                <div class="divisor1"></div>
                <button class="btn2">2</button>
                <div class="divisor2"></div>
                <button class="btn3">3</button>
                </div>
                <div class="form">
                    <form action="">
                        <h4>Dados Pessoais</h4>
                        <div class="boxSenha">
                            <div class="opcaoAcesso">
                                <div class="boxVisitante">
                                    <label for="inputVisitante">Visitante</label>
                                    <input type="radio" name="confirmarCliente" class="inputRadio" id="inputVisitante">
                                </div>
                                <div class="boxCliente">
                                    <div class="cliente">
                                         <label for="inputCliente">Cliente</label>
                                        <input type="radio" name="confirmarCliente" class="inputRadio" id="inputCliente">
                                    </div>
                                    <div class="senhaCliente">
                                        <!-- <label for="senha">Senha:</label><br> -->
                                         <p class="textSenha">Digite sua Senha:</p>
                                        <input type="text" name="senha" id="senha " class="inputSenha" placeholder="* * * * * * * *">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <label for="nome">Nome *</label><br>
                        <input type="text" name="nome" id="nome "class="nome" placeholder="Jucimar Souza" required>
                        <label for="telefone">Telefone *</label><br>
                        <input type="tel" name="telefone" id="telefone" class="telefone" placeholder="99941-8590" autocomplete="tel" required><br><br>
                       
                        <h4>Endereço para Entrega</h4>
                        <label for="endereco">Rua/Avenida: *</label><br>
                        <input type="text" name="endereco" id="endereco " class="endereco" placeholder="Av. João Bebe Àgua" required><br><br>
                        <div class="campos1">
                            <div class="numero">
                                <label for="numero*">Numero *</label><br>
                                <input type="text" name="numero*" id="numero*" class="numero*" placeholder="646" required><br><br>
                            </div>
                            <div class="complemento">
                                <label for="complemento">Complemento: *</label><br>
                                <input type="text" name="complemento" id="complemento " class="complemento" placeholder="Av. João Bebe Àgua" required><br><br>
                            </div>
                        </div>
                        <div class="campos1">
                            <div class="cep">
                                <label for="cep">Cep:</label><br>
                                <input type="text" name="cep" id="cep " class="cep" placeholder="49.108-183"><br><br>
                            </div> 
                            <div class="bairro">
                                <label for="bairro">Bairro: *</label><br>
                                <input type="text" name="bairro" id="bairro " class="bairro" placeholder="Madre Paulina" required><br><br>
                            </div>
                        </div>
                        <div class="campos1">
                            <div class="cidade">
                                <label for="cidade">Cidade: *</label><br>
                                <input type="text" name="cidade" id="cidade " class="cidade" placeholder="São Cristovão" required><br><br>
                            </div> 
                            <div class="uf">
                                <label for="uf">uf: *</label><br>
                                <input type="text" name="uf" id="uf " class="uf" placeholder="se" required><br><br>
                            </div>
                        </div>
                        <button id="continuar">Continuar</button>
                        <button>
                            <a href="../html/pagameto.php">Continuar</a>
                        </button>
                    </form>
            </div>
            </div>
        </section>
    </main>
</body>
</html>