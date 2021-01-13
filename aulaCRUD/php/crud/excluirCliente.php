<?php

    include_once 'conexao.php';

    $cod = $_GET["id"];

    $excluir = "delete from tbcliente where codígo = '$cod'";
    $executar = mysqli_query($conn, $excluir);

    if ($executar) {
        echo "Cliente excluído com sucesso!";
        echo "<br />";
        echo "<a href='../../index.php'>Voltar</a>";
    } else {
        echo "Cliente não excluído!";
        echo "<br />";
        echo "<a href='../../index.php'>Voltar</a>";
    }

?>