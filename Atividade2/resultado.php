<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal</title>
    <link rel="stylesheet" href="./styles/resultado.css">
</head>
<body>
    
    <div class="container">
        <?php
            $numeroEscolhido = $_POST["numero"];
            $animais = array(
                array("Arara", "arara.jpg", "arara.txt"),
                array("Elefante", "elefante.jpeg", "elefante.txt"),
                array("Gaviao", "gaviao.jpg", "gaviao.txt"),
                array("Iguana", "iguana.jpg", "iguana.txt"),
                array("Leao", "leao.jpg", "leao.txt"),
                array("Muflao", "muflao.jpg", "muflao.txt"),
                array("Parus", "parus.jpg", "parus.txt"),
                array("Raposa", "raposa.jpg", "raposa.txt"),
                array("Tartaruga", "tartaruga.jpg", "tartaruga.txt"),
                array("Tigre", "tigre.jpg", "tigre.txt")
            );

            echo "<h1>".$animais[$numeroEscolhido][0]."</h1>";
            echo "<div id='imagem'><img src='images/".$animais[$numeroEscolhido][1]."' /></div>";
            echo "<br />";
            echo "<iframe src='texto/".$animais[$numeroEscolhido][2]."' />";
        ?>
    </div>

</body>
</html>