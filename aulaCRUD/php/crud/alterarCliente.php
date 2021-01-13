<?php
    include_once 'conexao.php';

    $cod = $_POST["cxcod"];
    $nome = $_POST["cxno"];
    $email = $_POST["cxem"];
    $alterar = "
        update tbcliente set
        nome = '$nome',
        email = '$email'
        where
        codígo = '$cod';
    ";

    $executar = mysqli_query($conn, $alterar);

    if ($alterar) {
        echo "Dados alterados com sucesso!";
        echo "<br />";
        echo "<a href='../../index.php'>Voltar</a>";
    } else {
        echo "Dados não alterados";
        echo "<br />";
        echo "<a href='../../index.php'>Voltar</a>";
    }
    

?>