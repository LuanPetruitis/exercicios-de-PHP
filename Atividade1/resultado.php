<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/interrogacao.png" type="image/x-icon">
    <title>Quiz</title>
    <link rel="stylesheet" href="./css/resultado.css">
</head>
<body>
        <div class="container">
        <?php 
            $nome = $_POST["cxnome"];
            $perguntas = array ($_POST["group1"], $_POST["group2"], $_POST["group3"], $_POST["group4"], $_POST["group5"], $_POST["group6"], $_POST["group7"], $_POST["group8"], $_POST["group9"], $_POST["group10"]);
            $contCerta = 0;
            $contErrada = 0;

            for ($i = 0; $i < 10; $i++) {
                if ($perguntas[$i] == 4 || $perguntas[$i] == 6 || $perguntas[$i] == 9 || $perguntas[$i] == 13 || $perguntas[$i] == 19 || $perguntas[$i] == 24 || $perguntas[$i] == 25 || $perguntas[$i] == 31 || $perguntas[$i] == 33 || $perguntas[$i] == 39) {  
                    $contCerta += 1;
                } else {
                    $contErrada += 1; 
                }
            }

            echo "Nome: ".$nome."<br />";
            echo "Certas: ".$contCerta. "<br />";
            echo "Erradas: ".$contErrada."<br />";

            if ($contCerta >= 8) {
                echo "Você foi mestre";
            } elseif ($contCerta >=7 && $contCerta <= 8) {
                echo "Você foi ótimo";
            } elseif ($contCerta >=5 && $contCerta <= 6) {
                echo "Você foi bom";
            } else {
                echo "Você foi regular";
            }
        ?>    
        </div>

</body>
</html>