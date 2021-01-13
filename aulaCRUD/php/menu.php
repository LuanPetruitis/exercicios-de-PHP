<?php
    SESSION_START();
    if ($_SESSION["usuario"]) {
        $user = $_SESSION["usuario"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Menu Principal</h1>

    Perfil: <?php echo $user ?>
    <a href="fimSessao.php">Sair</a>

    <br />

    <a href="../cadCliente.php">Cadastro de cliente</a>
</body>
</html>

<?php
    } else {
        echo "
            <script>
                window.location.href = '../index.php';
            </script>
        ";
    }
?>