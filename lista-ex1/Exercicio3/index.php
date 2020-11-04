<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aprovado ou Reprovado</h1>
    <?php
        $nome = "Luan";
        $nota = 10;
        if ($nota >= 7) {
            echo "O aluno ".$nome." está aprovado";
        } else {
            echo "O aluno ".$nome." está reprovado";
        }
    ?>
</body>
</html>