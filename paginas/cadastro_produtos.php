<?php
    include('conexao.php');

    if(isset($_POST['submit'])){
        
        $titulo = $_POST['titulo'];
        $quantidade = $_POST['quantidade'];
        $preco = $_POST['preco'];
        $peso = $_POST['peso'];
        $descricao = $_POST['descricao'];
        $categoria = $_POST['categoria'];
        $imagem = $_FILES['imagem'];
        // TRATAMENTO DA IMAGEM
        $pasta = "../imagens/Produtos/";
        $nomeImagem = $imagem['name'];
        $novoNome = uniqid();
        $extensao = strtolower(pathinfo($nomeImagem, PATHINFO_EXTENSION));
        if($extensao != "jpeg" && $extensao != "jpg" && $extensao != "png"){
            die('Aceitamos somente arquivos do tipo: jpeg/jpg/png. !');
        }
        $path = $pasta . $novoNome . '.' . $extensao;
        $result = move_uploaded_file($imagem['tmp_name'], $path);

        MYSQLI_QUERY($connexxao, "INSERT INTO produtos (titulo, quantidade, preco, peso, descricao, categoria, imagem, imagemNome) VALUES('$titulo', '$quantidade', '$preco', '$peso', '$descricao', '$categoria', '$nomeImagem', '$path')");
        }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
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
    <!-- CADASTRO DE PRODUTOS -->
    <section class="cadastro-produtos">
        <form enctype="multipart/form-data" action="" method="POST">
            <fieldset>
                <legend>Cadastrar Produto</legend>
                Titulo: <input type="text" name="titulo" class="titulo" autofocus><br>
                Estoque: <input type="number" name="quantidade" class="qnt"><br>
                Preço: <input type="number" name="preco" class="preco"><br>
                Pêso: <input type="text" name="peso" class="peso"><br>
                Descrição: <input type="text" name="descricao" class="quant"><br>
                Categoria: <input type="text" name="categoria" class="categoria" ><br>
                Imagem:<input type="file" name="imagem" class="img"><br><br>
                <div class="botoes">
                    <input type="submit" name="submit" class="cadastrar" value="CADASTRAR">
                    <a href="../paginas/index.php">
                    <i class="fa-solid fa-house"></i>
                </div>
                </a><br>
            </fieldset>
        </form>
    </section>
    <!-- PESQUISA DE PRODUTOS NO BANCO DE DADOS -->
    <section class="listagem-produtos">
         <?php
        $pesquisa = $_POST['search'] ?? '';
        $sql = "SELECT * FROM produtos WHERE titulo LIKE '$pesquisa%'";
        $dados = mysqli_query($connexxao, $sql);
    ?>
        <form action="cadastro_produtos.php" method="POST" class="form-busca">
            <input type="search" name="search" autofocus maxlength="20">
            <button type="submit" class="btn-pesquisar">BUSCAR</button>
        </form>
        <!-- LISTAR PRODUTOS -->
        <div class="table-listagem">
            <table>
                <thead>
                    <tr>
                    <th>NOME</th>
                    <th>QNT</th>
                    <th>PREÇO</th>
                    <th>PÊSO</th>
                    <th>DESC.</th>
                    <th>CATEG.</th>
                    <th>AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($linha = mysqli_fetch_assoc($dados)){
                            $id = $linha["ID"];
                            $titulo = $linha["titulo"];
                            $quantidade = $linha["quantidade"];
                            $preco = $linha["preco"];
                            $peso = $linha["peso"];
                            $descricao = $linha["descricao"];
                            $categoria = $linha["categoria"];
                    ?>
                        <tr>
                            <form action="script.php?id=<?php echo $id;?>" method="POST">
                                <td><input type="text" name="titulo" value="<?php echo $titulo;?>"></td>
                                <td class="input-qnt"><input type="number" name="quantidade" value="<?php echo $quantidade;?>"></td>
                                <td><input type="text" name="preco" class="input-preco" value="<?php echo $preco;?>"></td>
                                <td><input type="text" name="peso" value="<?php echo $peso;?>"></td>
                                <td><input type="text" name="descricao" class="inputCP" value="<?php echo $descricao;?>"></td>
                                <td><input type="text" name="categoria" class="input-categoria" value="<?php echo $categoria;?>"></td>

                                <td class="acoes">
                                    <input type="hidden" name="id" value="<?php echo $id;?>">
                                    <button type="submit" name="editar" class="btn-editar"><i class="fa-solid fa-pen-to-square"></i></button>
                                    <button type="submit" name="excluir" class="btn-excluir"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </form>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>