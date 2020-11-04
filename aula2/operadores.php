<html>
	<head>
	<title>Aula 3 - Tipos de variavel</title>
	<meta charset="UTF-8"/>
	
	</head>
	<body>
	<h1>Tipos de operadores</h1>
		<?php
			echo "<h1>Operador Aritméticos</h1>";
			// 1=100%, .1=10% , .01 = 1%
			//% = resto da divisão
			$n1=2000;$n2=10;$n3=1; 
			echo $resp = $n1/$n3;
			echo "<h1>Operador de Comparação</h1>";
			//==,>,<,>=,<=,!=ou<>
			$a=1000;$b=100000;
			$c=($a==$b);
			echo "<h1>Operador Lógico</h1>";
			$user = "Anselmo";
			$senha = "1234";
			if($user == "Anselmo" || $senha=="123")
			{
				echo "Acesso permitido";
			}
			else
			{
				echo "Acesso negado";
			}				
		
					
			
			
		
		
		?>
	</body>
</html>