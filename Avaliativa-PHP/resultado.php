<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/interrogacao.png" type="image/x-icon">
    <title>CIA dos Salgados</title>
    <link rel="stylesheet" href="./styles/resultado.css">
    <link rel="shortcut icon" href="./imagens/icone.png" type="image/x-icon">
</head>
<body>
        <div class="container">
        <?php 

            $nome = $_POST["cxnome"];
            $telefone = $_POST["numero"];
            $salgado = $_POST["salgado"];
            $quantidade = $_POST["qtd"];
            $entrega = $_POST["entrega"];

            $total;
            $porUnidade;
            $desconto=0;
            $frete=0;

            if ($entrega == 1) {
                $frete = 5;
            }

            if ($salgado == "Coxinha") {
                $porUnidade = 8;
                    $total = $porUnidade * $quantidade + $frete;
            } elseif ($salgado == "Quibe") {
                $porUnidade = 7;
                $total = $porUnidade * $quantidade + $frete;
            } elseif ($salgado == "Enroladinho de presunto") {
                $porUnidade = 2;
                $total = $porUnidade * $quantidade + $frete;
            } elseif ($salgado == "Esfiha de Carne") {
                $porUnidade = 4;
                $total = $porUnidade * $quantidade + $frete;
            } else {
                 $porUnidade = 6;
                 $total = $porUnidade * $quantidade + $frete;
            }

            if ($quantidade >= 3) {
                if ($quantidade == 3) {
                    $desconto = ($total * 0.02);
                    $total = $total - $desconto;
                    return;
                }
                $desconto = ($total * 0.05);
                $total = $total - $desconto;
            } 
            
            echo "<h1>Pedido</h1>";
            echo "<p>Cliente: ".$nome." - Fone: ".$telefone."</p>";
            echo "<p>Confira seu pedido:</p>";
            echo "<p>Salgado: ".$salgado." - Valor unitário: ".$porUnidade." - Quantidade: ".$quantidade."</p>";
            echo "<p>Desconto: R$".$desconto."</p>";
            echo "<p>Total a ser Pago: R$".$total."</p>";

        ?> 
            <div class="button">
                <a href="index.html">Ok</a>
            </div>
        </div>

</body>
</html>