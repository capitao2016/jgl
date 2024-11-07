<?php 
    include_once("conexao.php");
?>
<?php
// acessar o banco de dados
    $sql_frutas = "SELECT * FROM cadastro_produtos ORDER BY id DESC";
    $resultado = $connexxao-> query($sql_frutas);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUTOS</title>
    <link rel="stylesheet" href="style.css">
    <script src="index.js" defer></script>
    <script src="https://kit.fontawesome.com/70c6f55f6a.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="box">
         <?php
            while ($sql_frutas =  mysqli_fetch_assoc($resultado)){
                
        ?>
        <table class="container">
            <td colspan="3"><img src="<?php echo $sql_frutas['imagemNome'];?>"></td>
            <tr>
                <td colspan="3" class="titulo"><?php echo $sql_frutas['titulo'];?></td>
            </tr>
            <tr class="opc">
                <td class="opc">
                    <input type="radio" name="radio" id="qnt1">
                    <label for="qnt1"><span class="qnt">6 Unidades</span><span class="valor">R$ 5,00</span></label>
                </td>
                <tr>
                    <td class="opc">
                        <input type="radio" name="radio" id="qnt2">
                        <label for="qnt2"><span class="qnt">6 Unidades</span><span class="valor">R$ 5,00</span></label>
                    </td>
                </tr>
            </tr>
            <!-- opções de Unidades -->
            <tr>
                <td class="numeros">
                    <button class="btn_menos">-</button>
                    <input type="text" name="numero" class="numero" value="1">
                    <button class="btn_mais">+</button>
                </td>
            </tr>
        </table>
        <?php
            }
        ?>
    </div>

</body>
</html>