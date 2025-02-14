<?php
    include "conexao.php";

    $sql = "SELECT * FROM produtos WHERE categoria='frutas' ";
    $result = mysqli_query($connexxao, $sql);

    
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
    <div class="box-card">
        <?php
            while ($dados = mysqli_fetch_assoc($result)){
        ?>
        <table>
            <tr>
                    <td class="img"><img src="<?php echo $dados['imagemNome'];?>"></td>
            </tr>
            <tr>
                    <td>
                        <h1 class="title"><?php echo $dados['titulo'];?></h1>
                    </td>
            </tr>
            <tr>
                    <td>
                        <div class="info">
                            <div class="price">
                                <p class="cifrao">R$ <span class="value"><?php echo $dados['preco'];?></span></p>
                            </div>
                            <div class="desc">
                                <h3 class="peso"><?php echo $dados['peso'];?></h3>
                                <h4 class="peso-qnt"><?php echo $dados['descricao'];?></h4>
                            </div>
                        </div>
                    </td>
            </tr>
            <tr>
                    <td>
                        <div class="qnt">
                            <button class="btn-qnt">-</button>
                            <input type="text" class="input-qnt" value="1" autofocus>
                            <button class="btn-qnt">+</button>
                        </div>
                    </td>
            </tr>
            <tr>
                    <td>
                        <button type="submit" name="submit" class="add-cart"><i class="fa-solid fa-cart-shopping"></i><span class="text">Adicionar</span></button>
                    </td>
            </tr>
        </table>
        <?php
            }
        ?>
    </div>
</body>
</html>