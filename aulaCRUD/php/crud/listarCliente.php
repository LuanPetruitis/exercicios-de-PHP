<?php
    SESSION_START();
    if ($_SESSION["usuario"]) {
        $usuario = $_SESSION["usuario"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once 'conexao.php'; ?>
</head>
<body>

    Perfil: <?php echo $usuario ?>
    <a href="../fimSessao.php">Sair</a>

    <div class="listar">
        <?php
            $consulta = "select * from tbcliente";
            $executar = mysqli_query($conn, $consulta);

            while ($linha = mysqli_fetch_array($executar)) {
        ?>
            <div class="cx1">
                Código: <input type="text" value="<?php echo $linha['codígo']; ?>" readonly > <br />
                Nome:  <input type="text" value="<?php echo $linha['nome']; ?>" readonly > <br />
                E-mail: <input type="text" value="<?php echo $linha['email']; ?>" readonly > <br />
              </div>

        <?php } ?>
        <a href="../../cadCliente.php">Voltar</a>
    </div>
</body>
</html>

<?php
    } else {
        echo "
            <script>
                window.location.href = '../../index.php';
            </script>
        ";
    }
?>