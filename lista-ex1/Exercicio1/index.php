<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Verificar se é positivo, negativo ou igual a zero</h1>
    <?php
        $numero = 0;
        if ($numero > 0) {
			echo "<h3>O número é positivo</h3>";
		} else if ($numero < 0) {
            echo "<h3>O número é negativo</h3>";
        } else {
			echo "<h3>O numero é igual a zero</h3>";
		}			
    ?>
</body>
</html>