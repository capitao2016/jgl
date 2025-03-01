<?php
    // include "conexao.php";


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="script-pedidos.js" defer></script>
    <style>
        .number{
            input:-webkit-outer-spin-button,
            input:-webkit-inner-spin-button{
                -webkit-appearence none;
                margin:0;
            }
        }
    </style>
    <title>Funções</title>
</head>
<body>
    <?php
        
    ?>
    <div class="add">
        <form method="POST">
            <button id="menos">-</button>
            <select name="number" id="number">
                <optgroup label="Normal">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </optgroup>
                <optgroup label="Promoção">
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </optgroup>
            </select>
            <button id="mais" onclick="add();">+</button>
        </form>
    </div>
    <input type="number" value="1">
</body>
</html>