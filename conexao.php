
<?php 

    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $bd = 'jgl';

    $connexxao = new mysqli($host, $usuario, $senha, $bd);
    if ($connexxao->connect_error) {
    echo 'Falha na conexao';
    } else{
    echo 'Conexao efetuada com sucesso.';
    }

?>