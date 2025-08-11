<?php
    include ('../config/conexao.php');

    if(isset($_POST['cadastrar'])){
        $cod = $_POST['cod'];
        $item = $_POST['item'];
        $preco = $_POST['preco'];
        $tipo = $_POST['tipo'];
        $peso = $_POST['peso'];
        $categoria = $_POST['categoria'];
        $img = $_FILES['img'];
    ////// TRATAMENTO DA IMAGEM////////////
        $pasta = "../Imagens/img_produtos/";
        $nomeImagem = $img['name'];
        $novoNome = uniqid();
        $extensao = strtolower(pathinfo($nomeImagem, PATHINFO_EXTENSION));
        $path = $pasta . $novoNome . '.' . $extensao;
        $resul = move_uploaded_file($img['tmp_name'], $path);

        MYSQLI_QUERY($con, "INSERT INTO cd_produtos(cod, item, preco, tipo, peso, categoria, img, nomeImagem) VALUES('$cod', '$item', '$preco', '$tipo', '$peso', '$categoria', '$nomeImagem', '$path')");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="../css/cd_produtos.css">
    <script src="../js/cd_produtos.js" defer></script>
    <script src="../js/menu.js" defer></script>
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
    <!-- FORMULARIO DE CADASTRO DE PRODUTOS -->
    <div class="cd_produtos">
        <h1>CADASTRO DE PRODUTOS</h1>
        <div class="cadastro">
             <?php 
             if(isset($_GET['cod'])){

                 $cod = $_GET['cod'];
                 $sqlEdite = mysqli_query($con, "SELECT * FROM cd_produtos WHERE cod = $cod");
                 $rows = mysqli_fetch_assoc($sqlEdite);
             }
            ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="box">
                    <div class="label">
                        <label for="cod">Cod</label>
                    </div>
                    <div class="input">
                        <input type="text" name="cod" class="cod" id="cod" autofocus>
                    </div>
                </div><br>
                <div class="box">
                    <div class="label">
                        <label for="nome">Nome</label>
                    </div>
                    <div class="input">
                        <input type="text" name="item" class="nome" id="nome">
                    </div>
                </div><br>
                <div class="box">
                    <div class="label">
                        <label for="preco">Preço</label>
                    </div>
                    <div class="input">
                        <input type="text" name="preco" class="preco" id="preco">
                    </div>
                </div><br>
                <div class="box">
                    <div class="label">
                        <label for="tipo">Tipo</label>
                    </div>
                    <div class="input">
                        <input type="text" name="tipo" class="tipo" id="tipo">
                    </div>
                </div><br>
                <div class="box">
                    <div class="label">
                        <label for="peso">Pêso</label>
                    </div>
                    <div class="input">
                        <input type="text" name="peso" class="peso" id="peso">
                    </div>
                </div><br>
                <div class="box">
                    <div class="label">
                        <label for="categoria">Categoria.</label>
                    </div>
                    <div class="input">
                        <input type="text" name="categoria" class="categoria" id="categoria">
                    </div>
                </div><br>
                <div class="box">
                    <div class="label label_img">
                        <label for="img">Imagem</label>
                    </div>
                    <div class="input">
                        <input type="file" accept=".jpg, .jpeg, .png" name="img" class="img" id="img">
                    </div>
                </div>
                <div class="btns">
                    <div class="btn-cadastro">
                        <button type="submit" name="cadastrar">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- LISTAGEM DE PRODUTOS DO CARRINHO -->
     <?php
        $pesquisa = $_GET['pesquisa'] ?? ' ';
        $sqlPesquisa =  mysqli_query($con, "SELECT * FROM cd_produtos WHERE item LIKE '$pesquisa%' "); 
        
     ?>
     <div class="box-lista-produtos">
        <form class="busca-item">
            <input type="search" name="pesquisa" class="input-submit" autofocus></input>
            <button type="submit" class="btn-submit"><span class="material-icons">search</span></button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>COD</th>
                    <th>ITEM</th>
                    <th>AÇÃO</th>
                </tr>
            </thead>
            <tbody>
                <?php while($linha = mysqli_fetch_assoc($sqlPesquisa)){ ?>
                    <tr>
                        <td><?php echo $linha['cod'];?></td>
                        <td><?php echo $linha['item'];?></td>
                        <td>
                            <div class="form">
                                    <a href="../html/edite_produtos.php?cod=<?php echo $linha['cod'];?>"><span class="material-icons">edit</span></a>
                                    <a href="../scripts/script_excluir.php?cod=<?php echo $linha['cod'];?>"><span class="material-icons">delete</span></a>
                            </div>
                        </td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
     </div>
     <!-- MENU LATERAL -->
    <div class="menu_modal">
        <div class="btn_fechar">
            <h1>X</h1>
        </div>
        <div class="menu_lista">
            <a href="../html/cd_produtos.php">Cadastrar Produtos</a>
            <a href="../html/comprar.php">comprar</a>
        </div>                                 
    </div>
</body>
</html>