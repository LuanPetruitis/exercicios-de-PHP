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
    <a href="fimSessao.php">Sair</a>
    <div class="listar">
        <?php
            $nome = $_POST["cxbuscanome"];
            $consulta = "select * from tbcliente where nome LIKE '%$nome%'";
            $executar = mysqli_query($conn, $consulta);
            $resultado = mysqli_num_rows($executar);

            if ($resultado != 0) {
                echo "<script>alert('Cliente localizado');</script>";
            } else {
                echo "<script>
                    alert('Cliente não localizado');
                    window.location.href = '../../index.php';
                    </script>";
            }
            
            while ($linha = mysqli_fetch_array($executar)) {
        ?>
            <div class="cx1">
                <form action="alterarCliente.php" method="post">
                    Código: <input type="text" name="cxcod" value="<?php echo $linha['codígo']; ?>"> <br />
                    Nome:  <input type="text" name="cxno" value="<?php echo $linha['nome']; ?>"> <br />
                    E-mail: <input type="text" name="cxem" value="<?php echo $linha['email']; ?>"> <br />

                    <button type="submit" style="border: none;background: #fff;">
                        <img src="../../img/bloco-de-notas.png" alt="Bloco de Notas" width="40" height="30">
                    </button>

                <a href="excluirCliente.php?id=<?php echo $linha['codígo']; ?>">
                    <img src="../../img/lixeira.png" alt="Lixeira" width="40" height="30">
                </a>
                </form>
              </div>

        <?php } ?>
        <a href="../../index.php">Voltar</a>
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