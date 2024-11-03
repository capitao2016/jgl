<?php 
    include_once("conexao.php");

    if(isset($_POST['submit'])){
        
        $titulo = $_POST['titulo'];
        $quantidade1 = $_POST['quantidade1'];
        $preco1 = $_POST['preco1'];
        $quantidade2 = $_POST['quantidade2'];
        $preco2 = $_POST['preco2'];
        $imagem = $_FILES['imagem'];

        $pasta = 'Imagens/produtos/';
        $imagemNome = $imagem['name'];
        $novoNome = uniqid();
        $extensao = strtolower(PATHINFO($imagemNome, PATHINFO_EXTENSION));
        $path = $pasta . $novoNome . "." . $extensao;
        $enviar = move_uploaded_file($imagem['tmp_name'], $path);

        if($enviar){
            $produtos = mysqli_query($connexxao, "INSERT INTO cadastro_produtos(titulo, quantidade1, preco1, quantidade2, preco2, imagem, imagemNome) VALUES('$titulo', '$quantidade1', '$preco1', '$quantidade2', '$preco2', '$novoNome', '$path')");
        }
    }
?>
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
    <div class="form">
        <fieldset>
            <legend>CADASTRO DE PRODUTOS</legend>
            <form action="cadastro_produtos.php" enctype="multipart/form-data" method="POST">
                <br>
                Titulo: <input type="text" placeholder="Nome da fruta" name="titulo" class="titulo"><br><br>
                OPÇÃO 1: <br> 
                Quantidade: <input type="text" name="quantidade1" class="quantidade"><br>
                Preço: <input type="text" name="preco1" class="preco"><br><br>
                OPÇÃO 2: <br> 
                Quantidade: <input type="text" name="quantidade2" class="quantidade"><br>
                Preço: <input type="text" name="preco2" class="preco"><br><br>
                Imagem: <input type="file" name="imagem"><br><br>
                <input type="submit" name="submit" value="CADASTRAR">
            </form>
        </fieldset>
    </div>    

</body>
</html>