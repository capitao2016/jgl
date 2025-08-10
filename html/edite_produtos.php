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
<?php
    if(isset($_GET['salvar'])) {

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
            <form action="../scripts/script_editar.php" method="POST" enctype="multipart/form-data">
                <div class="box">
                    <div class="label">
                        <label for="cod">Cod</label>
                    </div>
                    <div class="input">
                        <input type="text" name="cod" class="cod" id="cod" autofocus value="<?php echo $rows['cod'];?>">
                    </div>
                </div><br>
                <div class="box">
                    <div class="label">
                        <label for="preco">Nome</label>
                    </div>
                    <div class="input">
                        <input type="text" name="item" class="nome" id="nome" value="<?php echo $rows['item'];?>">
                    </div>
                </div><br>
                <div class="box">
                    <div class="label">
                        <label for="preco">Preço</label>
                    </div>
                    <div class="input">
                        <input type="text" name="preco" class="preco" id="preco" value="<?php echo $rows['preco'];?>">
                    </div>
                </div><br>
                <div class="box">
                    <div class="label">
                        <label for="preco">Tipo</label>
                    </div>
                    <div class="input">
                        <input type="text" name="tipo" class="tipo" id="tipo" value="<?php echo $rows['tipo'];?>">
                    </div>
                </div><br>
                <div class="box">
                    <div class="label">
                        <label for="preco">Pêso</label>
                    </div>
                    <div class="input">
                        <input type="text" name="peso" class="peso" id="peso" value="<?php echo $rows['peso'];?>">
                    </div>
                </div><br>
                <div class="box">
                    <div class="label">
                        <label for="preco">Categoria.</label>
                    </div>
                    <div class="input">
                        <input type="text" name="categoria" class="categoria" id="categoria" value="<?php echo $rows['categoria'];?>">
                    </div>
                </div><br>
                <div class="box">
                    <div class="label label_img">
                        <label for="img">Imagem</label>
                    </div>
                    <div class="input">
                        <input type="file" name="img" class="img" id="img" value="<?php echo $rows['nomeImagem'];?>">
                    </div>
                </div>
                <div class="btns">
                    <div class="btn-cadastro">
                        <button type="submit" name="salvar">Salvar</button>
                    </div>
                </div>
                </div>
            </form>
        </div>
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