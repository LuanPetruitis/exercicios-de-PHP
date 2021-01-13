<?php
    SESSION_START();
    if (isset($_SESSION["usuario"])) {
        $user = $_SESSION["usuario"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset {
            width: 600px;
            margin: auto;
        }
    </style>
</head>
<body>
    <form action="php/crud/inserirdadoscliente.php" method="POST">
        <fieldset>
            Nome: <br />
            <input type="text" name="cxnome"> <br />
            E-mail: <br />
            <input type="text" name="cxemail"> <br />
            <input type="submit" value="Enviar">
        </fieldset>
    </form>

    <a href="php/crud/listarCliente.php">Listar Cliente</a>

        <form action="php/crud/buscarClienteNome.php" method="POST">
            Digite o nome do cliente:
            <input type="text" name="cxbuscanome" />
            <button type="submit">Buscar</button>
        </form>

</body>
</html>
<?php
    } else {
        echo "
            <script>
                window.location.href = 'index.php';
            </script>
        ";
    }
?>