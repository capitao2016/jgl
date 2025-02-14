<?php
    include("conexao.php");

    if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $sql = "INSERT INTO administradores (nome, senha) VALUES('$nome', '$senha')";
        mysqli_query($connexxao, $sql);
    }
?>

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
    <div class="btn-home"><a href="index.php"><i class="fa-solid fa-house"></i></a></div>
    <!-- CADASTRO DE ADMINISTRADORES -->
    <div class="container">
         <form action="#" method="POST">
             <div>
                 <label for="nome" class="form-label">Nome</label>
                 <input type="text" class="form-control" name="nome">
             </div>
             <div>
                 <label for="senha" class="form-label">Senha</label>
                 <input type="password" class="form-control" name="senha">
             </div>
             <button type="submit" name="cadastrar" class="btn-cadastrar">Cadastrar</button>
         </form>
    </div>
     <!--BUSCA E LISTAGEM DOS ADMIN -->
    <?php
        $pesquisa = $_POST['buscar'] ?? '';
        $buscar = "SELECT * FROM administradores WHERE nome LIKE '$pesquisa%' ";
        $query = mysqli_query($connexxao, $buscar);
    ?>
    <form action="#" method="POST" class="formSearch">
        <div class="search">
            <input type="text" name="buscar" class="form-control" autofocus>
            <button type="submit" class="btn">Buscar</button>
        </div>
    </form>
    </div>
    <div class="box-table">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">NOME</th>
                <th scope="col">SENHA</th>
                <th scope="col">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($linha = mysqli_fetch_assoc($query)){
                        $id = $linha["id"];
                        $nome = $linha["nome"];
                        $senha = $linha["senha"];
                ?>
                    <tr>
                        <form action="editarAdmin.php?id=<?php echo $id;?>" method="POST">
                            <td><input type="text" name="nome" value="<?php echo $nome;?>"></td>
                            <td><input type="text" name="senha" class="inputSenha" value="<?php echo $senha;?>">
                            </td>
                            <td class="acoes-admin">
                                <input type="hidden" name="id" value="<?php echo $id;?>">
                                <button type="submit" name="editar" class="btn-editar"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button type="submit" name="excluir" class="btn-excluir"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>