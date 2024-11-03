<?php 

    include_once("conexao.php");

// acessar o banco de dados
    $sql_frutas = "SELECT * FROM cadastro_produtos ORDER BY id DESC";
    $resultado = $connexxao-> query($sql_frutas);
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
<!-- Mostrar os dados do banco de dados -->
    <div class="container">
        <div class="card">
                <?php
                    while ($sql_frutas =  mysqli_fetch_assoc($resultado)){
                    
                ?>

                <img src="<?php echo $sql_frutas['imagemNome'];?>">
                <div class="titulo">
                    <P><?php echo $sql_frutas['titulo'];?></P>
                </div>
                <!-- opções de compras dos produtos -->
                <div class="box_opc">
                    <input type="radio" class="input_opc" name="input_opc" id="und">
                    <label for="und">
                        <span class="texto"><?php echo $sql_frutas['quantidade1'];?></span>
                        <span class="valor"><?php echo $sql_frutas['preco1'];?></span>
                    </label><br>
                    <input type="radio" class="input_opc" name="input_opc" id="kg">
                    <label for="kg">
                        <span class="texto"><?php echo $sql_frutas['quantidade2'];?></span>
                        <span class="valor"><?php echo $sql_frutas['preco2'];?></span>
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
                <?php
                    }
                ?>
        </div>
    </div>
</body>
</html>