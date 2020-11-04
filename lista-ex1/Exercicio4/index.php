<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Novo salário</h1>
    <?php
        $salarioAtual = 1000.00;
        $salarioAjustado = $salarioAtual + $salarioAtual *0.5;
        echo "O valor do novo salário é de R$".$salarioAjustado;
    ?>
</body>
</html>