<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Exercicio 1</h1>";
        $numeros = array (1, 2, 3, 4, 5);

        for ($i = 0; $i < 5; $i++) {
            echo "O quadrado de ".$numeros[$i]." é igual a ".$numeros[$i]*$numeros[$i]."<br/>";
        }

        echo "<h1>Exercicio 2</h1>";
        $numerosUm = 2;
        $numerosDois = 1;
        $numerosTres = 5;

        if ($numerosUm > $numerosDois && $numerosUm > $numerosTres) {
            echo "O primeiro numero digitado é ".$numerosUm." e é o maior";
        } elseif ($numerosDois > $numerosUm && $numerosDois > $numerosTres) {
            echo "O segundo numero digitado é ".$numerosDois." e é o maior";
        } else {
            echo "O terceiro numero digitado é ".$numerosTres." e é o maior";
        }

        echo "<h1>Exercicio 3</h1>";
        $idade = array (1, 18, 22, 10, 11, 12, 15, 66);
        $contMaior = 0;
        $contMenor = 0;

        for ($i = 0; $i < count($idade); $i++) {
            if ($idade[$i] >= 18) {
                $contMaior++;
            } else {
                $contMenor++;
            }
        } 
        echo $contMaior." pessoas são maiores de idade <br />";
        echo $contMenor." pessoas são menores de idade <br />";

        echo "<h1>Exercicio 4</h1>";
        
        for ($i = 0; $i < 10; $i++) {
            echo "<p>Corinthians é minha vida, corinthians é minha historia...</p>";
        }

        echo "<h1>Exercicio 5</h1>";

        $nomes = array ('Luan', 'Pedro', 'João Victor', 'Lucas');

        for ($n=count($nomes)-1; $n >= 0; $n--) {
            echo  "<p>".$nomes[$n]."</p>";
        }

        echo "<h1>Exercicio 6</h1>";
        $soma = 0;
        for ($i=0; $i <= 50; $i++) {
            if ($i % 2 == 0) {
                $soma += $i;
            }
        }
        echo "<p>A soma de todos os números pares é igual a ".$soma."</p>";
        
        echo "<h1>Exercicio 7</h1>";

        $numeroParaTabuada = 5;

        for ($i = 0; $i <=10; $i++) {
            echo $numeroParaTabuada." X ".$i." = ".$numeroParaTabuada*$i."<br />";
        }

        echo "<h1>Exercicio 8</h1>";

        for ($i = 500; $i >=10; $i--) {
            echo $i.", ";
        }

        echo "<h1>Exercicio 9</h1>";

        for ($numeroParaTabuada = 0; $numeroParaTabuada <= 10; $numeroParaTabuada++){
            echo "<br />TABUADA do ".$numeroParaTabuada."<br /><br />";
            for ($i = 0; $i <=10; $i++) {
                echo $numeroParaTabuada." X ".$i." = ".$numeroParaTabuada*$i."<br />";
            }
        }

        echo "<h1>Exercicio 10</h1>";

        $numero = 5;
        $frase = "Corinthians é minha vida, corinthians é minha historia...";

        $contador = 1;
        while ($contador <= $numero) {
            echo "<p>".$frase."</p>";
            $contador++;
        }

    ?>
</body>
</html>