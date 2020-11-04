<html>
	<head>
	<title>Aula 3 - Tipos de variavel</title>
	<meta charset="UTF-8"/>
	
	</head>
	<body>
	<h1>Tipos de variável, Básicas, compostas
	e especiais</h1>
		<?php
			echo "<h2>Variável Básicas</h2>";
			$nome = "Anselmo"; // string texto
			$idade = 37; // inteiro int
			$altura = 1.8; // flutuante float
			$filhos = true; // booleano
			echo "Nome ".$nome." Idade ".$idade;
			echo "<br>";
			var_dump($filhos);
			echo "<h1>var Composta</h1>";
			$frutas = array('banana','uva','Melão');
			echo "Fruta ".$frutas[2];
			echo "<br>";
			var_dump($frutas);
			echo "<h1>Var Especiais</h1>";
			$nota=null;
			$media = 8.7;
			echo "Nota ".$nota;
			var_dump($media);
			echo "<h1>Função de conversão</h1>";
			$decimal = 10.5;
			settype($decimal, integer);
			
			echo "Valor decimal ".$decimal."<br>";
			$res  =5.2*3;
			echo (int)$res;
			
			
			//função para ver tem valor na variável
			var_dump(empty($nota));
			//função para se existe a variável
			var_dump(isset($res));
			
			$n1 = 2000;
			$n2 = 10;
			$n3 = .1;
			echo $resp = $n1*$n3;
			
			
			
			
			
		?>
	</body>
</html>