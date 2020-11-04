<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Verificar se o número é par ou ímpar</h1>
    <?php
        $numero = 1;

        if ($numero % 2 == 0) {
            echo "<h3>O número é par</h3>";
        } else {
            echo "<h3>O número é ímpar</h3>";
        }
    
    ?>
</body>
</html> 